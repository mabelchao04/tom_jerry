<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class HomeController extends Controller 
{

    public function index()
    {
<<<<<<< HEAD
    	return view('welcome');
=======
        $intercom = DB::table('company')
                    ->where('d_date', '0000-00-00 00:00:00')
                    ->where('stop_flag', '!=', 'Y')
                    ->orderby('code', 'desc')
                    ->select('*')
                    ->get();

        return View('home', ['title' => '油站列表',
                             'hello' => '<油站列表>',
                             'intercom' => $intercom,
                             'i' => 1
                            ]);
>>>>>>> ee3f3c3c3fa8459d9308f3db13325dd2556735c5
    }
    
}