<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{

    public function mahasiswa(){
        $arrMahasiswa =["Baihaqi","Ulfa Khairuni","Mery Maulina","Susilo bambang kusumo","Prabowo Subianto"];
        return view('mahasiswa')->with('mahasiswa',$arrMahasiswa);
    }

    public function dosen(){
        $arrDosen =["Megawati","Ulfa Khairuni","Sofia spbu","Susilo sst","Dhea"];
        return view('dosen')->with('dosen',$arrDosen);
    }

    public function galery(){
        return view('galery');
    }

    public function informasi($jurusan,$prodi){
        $data =[$jurusan,$prodi];

        return view('informasi')->with('data',$data);
    }
}