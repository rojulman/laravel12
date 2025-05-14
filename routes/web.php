<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about',function(){
    return view('about');
});

Route::get('salam/{name}',function($name){
    return "Assalamualaikum wr.wb $name !!";
});

use App\Http\Controllers\KelurahanController;
Route::get('kelurahan', [KelurahanController::class, 'index'])->name('kelurahan.index');
