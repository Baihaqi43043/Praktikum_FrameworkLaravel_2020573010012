<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ivaaController extends Controller
{
    public function home()
    {
        return view('home');
    }

  

    public function kolam()
    {
        return view('kolam');
    }

    public function laporan()
    {
        return view('laporan');
    }
    public function detailKaryawan()
    {
        return view('detail_Karyawan');
    }
    public function detailKolam()
    {
        return view('detail_kolam');
    }
}
