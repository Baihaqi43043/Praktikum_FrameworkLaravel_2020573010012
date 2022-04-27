<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', function () {
    $arrMahasiswa = ["Baihaqi","Ulfa Khairuni","Luhut","jokowi"];

    return view('mahasiswa')->with('mahasiswa',$arrMahasiswa);
});

Route::get('/dosen', function () {
    $arrDosen= ["Maya fitriani, M.M","Prof Silvia","Prof Luhut","Ir.jokowi"];

    return view('dosen')->with('dosen',$arrDosen);
});

Route::get('galery',function(){
    return view('galery');
});