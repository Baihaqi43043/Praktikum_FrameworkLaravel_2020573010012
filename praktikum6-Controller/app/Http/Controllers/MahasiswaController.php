<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{

    public function index(){
        $nama='Baihaqi';
        $nilai = 75 ;
        return view('mahasiswa',compact('nama','nilai'));
    }
}