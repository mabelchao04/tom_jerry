<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Http\Resources\TypeCollection;
use App\Http\Resources\TypeResource;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\Response;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::select('id', 'name', 'sort')->get();
        //return response(['data'=> $types], Response::HTTP_OK);
        return new TypeCollection($types);
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
        $this->validate($request,[
            'name' => [
                'required',
                'max:50',
                Rule::unique('types', 'name')
            ],
            'sort' => 'nullable|integer',
        ]);
        //如果沒有傳入sort欄位內容
        if(!isset($request->sort)) {
            $max = Type::max('sort');
            $request['sort'] = $max + 1;
        }
        //寫入資料庫
        $type = Type::create($request->all());

        //return response(['data' => $type], Response::HTTP_CREATED);
        return new TypeResource($type);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function show(Type $type)
    {
        //return response(['data' => $type], Response::HTTP_OK);
        return new TypeResource($type);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function edit(Type $type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Type $type)
    {
        $this->validate($request,[
            'name' => [
                'max:50',
                //更新時排除自己的名稱，檢查是否是唯一值
                Rule::unique('types', 'name')->ignore($type->name, 'name')
            ],
            'sort' => 'nullable|integer',
        ]);

        $type->update($request->all());

        //return response(['data' => $type], Response::HTTP_OK);
        return new TypeResource($type);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type $type)
    {
        $type->delete();
        return response(['data' => $type], Response::HTTP_NO_CONTENT);
    }
}
