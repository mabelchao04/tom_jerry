<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Http\Resources\AnimalResource;
use App\Http\Resources\AnimalCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

class AnimalController extends Controller
{

    public function __construct()
    {
        $this->middleware('client', ['only' => ['index', 'show']]);
        $this->middleware('scopes:create-animals', ['only' => ['store']]);
        $this->middleware('auth:api', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $url = $request->url;
        $queryParams = $request->query();
        ksort($queryParams);
        $queryString = http_build_query($queryParams);
        $fullUrl = "{$url}?{$queryString}";

        if(Cache::has($fullUrl)){
            return Cache::get($fullUrl);
        }

        $limit = $request->limit ?? 10;

        $query = Animal::query()->with('type');

        if(isset($request->filters)){
            $filters = explode(',',$request->filters);
            foreach($filters as $key => $filter){
                list($key, $value) = explode(':',$filter);
                $query->where($key, 'like', "%$value%");
            }
        }

        if(isset($request->sorts)){
            $sorts = explode(',',$request->sorts);
            foreach($sorts as $key => $sort){
                list($key, $value) = explode(':',$sort);
                if($value == 'desc' || $value == 'asc'){
                    $query->orderBy($key, $value);
                }
            }
        }
        else{
            $query->orderBy('id', 'desc');
        }

        $animals = $query->paginate($limit)->appends($request->query());

        return Cache::remember($fullUrl, 10, function () use ($animals) {
            //return response($animals, Response::HTTP_OK);
            return new AnimalCollection($animals);
        });
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', Animal::class);

        $this->validate($request,[
            'type_id' => 'nullable|exists:types,id',
            'name' => 'required|string|max:255',
            'birthday' => 'nullable|date',
            'area' => 'nullable|string|max:255',
            'fix' => 'required|boolean',
            'description' => 'nullable',
            'personality' => 'nullable'
        ]);

        //$request['user_id'] = '1';

        //$animal = Animal::create($request->all());
        //$animal = auth()->user()->animals()->create($request->all());
        //$animal = $animal->refresh();
        //return response($animal, Response::HTTP_CREATED);

        try {
            //開始資料庫交易
            DB::beginTransaction();
            //登入會員新增動物，建立會員與動物的關係，返回動物物件
            $animal = auth()->user()->animals()->create($request->all());
            //刷新動物物件(從資料庫讀取完整欄位資料)
            $animal = $animal->refresh();
            //建立動物資源同時將動物加到我的最愛
            $animal->likes()->attach(auth()->user()->id);
            DB::commit();
            return new AnimalResource($animal);
        } catch (\Exception $e) {
            DB::rollback();
            $errorMessage = 'MESSAGE: '. $e->getMessage();
            Log::error($errorMessage);
            return response(
                ['error' => '程式異常'],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $animal)
    {
        //return response($animal, Response::HTTP_OK);
        return new AnimalResource($animal);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function edit(Animal $animal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Animal $animal)
    {
        $this->authorize('update', $animal);

        $this->validate($request,[
            'type_id' => 'nullable|integer',
            'name' => 'string|max:255',
            'birthday' => 'nullable|date',
            'area' => 'nullable|string|max:255',
            'fix' => 'boolean',
            'description' => 'nullable|string',
            'personality' => 'nullable|string'
        ]);

        //$request['user_id'] = '1';

        $animal->update($request->all());
        return response($animal, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animal $animal)
    {
        $animal->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
