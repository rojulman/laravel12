<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paramedik;
class ParamedikController extends Controller
{
    public function index()
    {
        $paramediks = Paramedik::all();
        return view('paramedik.index',[
            'paramedik' => $paramediks,
        ]);
    }
}
