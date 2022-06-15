<?php

namespace App\Http\Controllers;

use App\Models\mahasiswas;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function insert(){
        $mahasiswa = new mahasiswas();
        $mahasiswa->nim ='2020573010012';
        $mahasiswa->nama ='Baihaqi';
        $mahasiswa->tanggal_lahir ='2001-11-19';
        $mahasiswa->ipk =3.8;
        $mahasiswa->save();
        dump($mahasiswa);
    }
}
