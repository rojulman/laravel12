<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UnitKerja;

class UnitKerjaController extends Controller
{
    public function index()
    {
        $unitKerjas = UnitKerja::all();
        return view('unitkerja.index',[
            'unitKerjas' => $unitKerjas,
        ]);
    }
}
