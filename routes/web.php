<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('salam/{name}',function($name){
    return "Assalamualaikum wr.wb $name !!";
});

Route::get('about',function(){
    return view('about');
});

Route::get('produk',function(){
    return view('produk/index');
});

Route::get('produk/{id}',function($id){
    return view('produk/index',['idproduk'=>$id]);
});

use App\Http\Controllers\UnitKerjaController;
Route::get('unitkerja',[UnitKerjaController::class,'index'])->name('unitkerja.index');

use App\Http\Controllers\ParamedikController;
Route::get('paramedik',[ParamedikController::class,'index'])->name('paramedik.index');
