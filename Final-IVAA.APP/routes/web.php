<?php

use App\Http\Controllers\ivaaController;
use App\Http\Controllers\KaryawanController;
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

Route::get('/karyawan/index',[KaryawanController::class,'index']);
Route::post('/karyawan', [KaryawanController::class,'filter']);
Route::post('/karyawan/create', [KaryawanController::class,'store'])->name('/karyawan/create.store');
Route::post('/karyawan/createpeminjaman', [KaryawanController::class,'storePinjam'])->name('/karyawan/create.storePinjam');


Route::get('/home',[ivaaController::class,'home']);
Route::get('/kolam',[ivaaController::class,'kolam']);
Route::get('/laporan',[ivaaController::class,'laporan']);


Route::get('/karyawan/create',[KaryawanController::class,'create']);
Route::get('/karyawan/peminjaman',[KaryawanController::class,'pinjam']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');