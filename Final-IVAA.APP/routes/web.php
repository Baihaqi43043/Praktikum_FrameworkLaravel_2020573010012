<?php

use App\Http\Controllers\ivaaController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\KolamController;
use App\Http\Controllers\TagihanController;
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

Route::get('/karyawan/index', [KaryawanController::class, 'index']);
Route::post('/karyawan', [KaryawanController::class, 'filter']);
Route::post('/karyawan/create', [KaryawanController::class, 'store'])->name('/karyawan/create.store');
Route::post('/karyawan/createpeminjaman', [KaryawanController::class, 'storePinjam'])->name('/karyawan/create.storePinjam');
Route::get('karyawan/{id}/edit', [KaryawanController::class, 'edit']);
Route::put('karyawan/{id}', [KaryawanController::class, 'update']);
Route::get('karyawan/{id}/hapus', [KaryawanController::class, 'destroy']);


Route::post('/kolam/filter', [KolamController::class, 'filter']);
Route::get('/kolam/index', [KolamController::class, 'index']);
Route::get('/kolam/tambahkolam', [KolamController::class, 'TmbKolam']);
Route::post('/kolam/create-tambahkolam', [KolamController::class, 'storeKolam'])->name('/kolam/create-tambahkolam.storeKolam');
Route::get('/kolam/tambahKeluar', [KolamController::class, 'TmbKeluar']);
Route::post('/kolam/create-tambahKeluar', [KolamController::class, 'storeKeluar'])->name('/kolam/create-tambahKeluar.storeKeluar');
Route::get('/kolam/tambahMasuk', [KolamController::class, 'TmbMasuk']);
Route::post('/kolam/create-tambahMasuk', [KolamController::class, 'storeMasuk'])->name('/kolam/create-tambahKeluar.storeMasuk');
Route::get('/kolam/tambahBarang', [KolamController::class, 'TmbBarang']);
Route::post('/kolam/create-tambahBarang', [KolamController::class, 'storeBarang'])->name('/kolam/create-tambahBarang.storeBarang');
Route::get('kolam/{id}/hapus', [KolamController::class, 'destroy']);



Route::get('/tagihan', [TagihanController::class, 'tagihan']);
Route::get('/tagihan/tambahtagihan', [TagihanController::class, 'Tmbtagihan']);
Route::post('/tagihan/create-tagihan', [TagihanController::class, 'storeTagihan'])->name('/tagihan/create-tagihan.storeTagihan');
Route::get('tagihan/{id}/hapus', [TagihanController::class, 'destroy']);
Route::get('tagihan/{id}/edit', [TagihanController::class, 'edit']);
Route::put('tagihan/{id}', [TagihanController::class, 'update']);

Route::get('/karyawan/create', [KaryawanController::class, 'create']);
Route::get('/karyawan/peminjaman', [KaryawanController::class, 'pinjam']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
