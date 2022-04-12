<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\Admin\PageController;
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

Route::get('/mahasiswa',[MahasiswaController::class,'mahasiswa']);

Route::get('/dosen',[MahasiswaController::class,'dosen']);

Route::get('/galery',[MahasiswaController::class,'galery']);

Route::get('/informasi/{jurusan}/{prodi}',[MahasiswaController::class,'informasi']);

// Route::get('/',[PageController::class,'index']);

// // Route::get('/mahasiswa',[PageController::class,'tampil']);
// Route::get('/coba-facade',[PageController::class,'cobaFacade']);
// Route::get('/coba-class',[PageController::class,'cobaclass']);


// Route::get('/mahasiswa',function(){
//     $arrMahasiswa = ["Luhut","Baihaqi","Ulfa Khairuni","Putin"];
//     return ('mahasiswa')->with('mahasiswa',$arrMahasiswa);
// });
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/mahasiswa', function () {
//     $nama='Baihaqi';
//     $nilai = [80,64,30,76,95] ;
//     return view('mahasiswa',compact('nama','nilai'));
// });

// Route::get('mahasiswa',[MahasiswaController::class,'index']);
