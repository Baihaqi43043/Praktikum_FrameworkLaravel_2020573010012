<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function index(){
        return"halaman home";
    }

    public function tampil(){
        $arrMahasiswa =["Baihaqi","Megawati","luhut","Susilo bambang kusumo","Prabowo Subianto"];
        return view('mahasiswa')->with('mahasiswa',$arrMahasiswa);
    }

    public function cobaFacade(){
        echo Str::snake('SedangBelajarLaravel');
        echo "<br>";
        echo Str::kebab('SedangBelajarLaravel');

    }

    public function cobaclass(){
        $foo = new \App\Http\Controllers\Coba\Foo();
        echo $foo->bar();
    }

}
