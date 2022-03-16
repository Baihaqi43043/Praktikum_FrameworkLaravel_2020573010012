<?php

use App\Http\Controllers\TaskController;
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

Route::get('/home',function(){
    return view('home');
});

Route::get('/mahasiswa',function(){
    $mahasiswa1 = "Doni salmanan";
    $mahasiswa2 = "Baihaqi";
    $mahasiswa3 = "Indra kenz";
    $mahasiswa4 = "wakgenk";
    return view('kampus.mahasiswa',compact("mahasiswa1","mahasiswa2","mahasiswa3","mahasiswa4"));
});

// Route::get('/mahasiswa',function(){
//     return View::make('mahasiswa');
// });

Route::get('/profile',function(){
    return view('profile',[
        'title'=>'ini profile'
    ]);
});

Route::get('/about',function(){
    return view('about',[
        'title'=>'halo ini about'
    ]);
});



// //tes
// Route::get('/home',[TaskController::class],'home');

Route::post('/tasks',[TaskController::class,'store']);

Route::get('/tasks',[TaskController::class,'index']);

Route::get('/tasks/create',[TaskController::class,'create']);

Route::get('/tasks/{id}',[TaskController::class,'show']);

Route::get('tasks/{id}/edit',[TaskController::class,'edit']);

Route::patch('/tasks/{id}',[TaskController::class,'update']);

Route::delete('/tasks/{id}',[TaskController::class,'destroy']);