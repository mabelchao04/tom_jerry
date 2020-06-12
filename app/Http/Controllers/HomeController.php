<?php

namespace App\Http\Controllers;

use View;
use DB;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController 
{

    public function index()
    {
        $intercom = DB::table('company')
                    ->where('d_date', '0000-00-00 00:00:00')
                    ->where('stop_flag', '!=', 'Y')
                    ->select('*')
                    ->get();

        return View('home', ['title' => '油站列表',
                             'hello' => '<油站列表>',
                             'intercom' => $intercom,
                             'i' => 1
                             ]);
    }

}