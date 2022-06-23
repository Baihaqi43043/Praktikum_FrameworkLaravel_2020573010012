<?php

use App\Http\Controllers\ivaaController;
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

Route::get('/karyawan',[ivaaController::class,'karyawan']);
Route::get('/home',[ivaaController::class,'home']);
Route::get('/kolam',[ivaaController::class,'kolam']);
Route::get('/laporan',[ivaaController::class,'laporan']);
Route::get('/detail-karyawan',[ivaaController::class,'detailKaryawan']);
Route::get('/detail-kolam',[ivaaController::class,'detailKolam']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');