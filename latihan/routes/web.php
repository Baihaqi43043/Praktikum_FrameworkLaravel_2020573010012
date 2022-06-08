<?php

use App\Http\Controllers\ControllerLatihan;
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

Route::get('/home',[ControllerLatihan::class,'home']);

Route::get('/contact',[ControllerLatihan::class,'contact']);

Route::get('/about',[ControllerLatihan::class,'about']);

Route::get('/profile',[ControllerLatihan::class,'profile']);

Route::get('/portofolio',[ControllerLatihan::class,'portofolio']);