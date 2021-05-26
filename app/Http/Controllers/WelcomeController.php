<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $banners = [
            'src' => [
                '/images/animal-7.jpg',
                '/images/animal-8.jpg',
                '/images/animal-6.jpg'
            ]
        ];

        $blocks = [
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

        $news = [
            'src' => [
                '/images/animal-1.jpg',
                '/images/rock-1.jpg',
                '/images/rock-2.jpg'
            ]
        ];

        $projects = [
            'title' => [
                'TITLE 1',
                'TITLE 2',
                'TITLE 3'
            ]
        ];

        return view('welcome', compact('banners', 'blocks', 'news', 'projects'));
    }
}
