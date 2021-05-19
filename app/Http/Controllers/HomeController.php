<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $card_array = [
            'bg_color' => [
                'bg-primary', 
                'bg-secondary', 
                'bg-success', 
                'bg-danger', 
                'bg-warning', 
                'bg-info'
            ],
            'title' => [
                '走失協尋',
                '領　　養',
                '認　　養',
                '寵物送養',
                '寵物送別',
                '動物醫院'
            ], 
        ];

        return view('home', compact('card_array'));
    }
}
