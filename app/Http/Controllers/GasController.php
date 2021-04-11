<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

use App\Models\Gas;
use App\Http\Repositories\GasRepository;

class GasController extends Controller 
{

    /**
     * The gas repository instance.
     *
     * @var GasRepository
     */
    protected $gas;

    /**
     * Create a new controller instance.
     *
     * @param  GasRepository  $gas
     * @return void
     */
    public function __construct(GasRepository $gas)
    {
        $this->gas = $gas;
    }

    /**
     * Display a list of all of the gas station.
     *
     * @return Response
     */
    public function index()
    {
        return View('gas', [
            'title' => '油站列表',
            'hello' => '<油站列表>',
            'intercom' => $this->gas->listGas(),
            'i' => 1
        ]);
    }

}