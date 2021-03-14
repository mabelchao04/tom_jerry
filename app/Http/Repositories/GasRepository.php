<?php

namespace App\Http\Repositories;

use App\Gas;

class GasRepository
{
    /**
     * Get all of the company for a given user.
     *
     * @return Collection
     */
    public function listGas()
    {
        return  Gas::where('d_date', '0000-00-00 00:00:00')
                ->where('stop_flag', '!=', 'Y')
                ->orderby('code', 'asc')
                ->select('*')
                ->get();
    }
}