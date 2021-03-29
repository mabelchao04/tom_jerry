<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class HomeController extends Controller 
{

    public function index()
    {

        //$intercom = DB::table('company')
        //            ->where('d_date', '0000-00-00 00:00:00')
        //            ->where('stop_flag', '!=', 'Y')
        //            ->orderby('code', 'desc')
        //            ->select('*')
        //            ->get();

        return View('home');
        //return 'hello world';

    }
    
}