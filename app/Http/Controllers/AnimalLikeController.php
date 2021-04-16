<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AnimalLikeController extends Controller
{
    public function __construct()
    {
        /**
         * 一定要加上中介層auth，必須要登入才可以使用
         * 沒有加入auth會無法讀取到會員資料
         */
        $this->middleware('auth:api');
    }

    public function index(Animal $animal)
    {
        return $animal->likes()->paginate(10);
    }

    public function store(Request $request, Animal $animal)
    {
        $result = $animal->likes()->toggle(auth()->user()->id);

        return response($result, Response::HTTP_OK);
    }
}
