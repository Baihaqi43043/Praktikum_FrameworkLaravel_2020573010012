<?php

namespace App\Http\Controllers;

use App\Models\pengeluaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ivaaController extends Controller
{
    public function home()
    {
        $datakeluar = pengeluaran::select('SELECT  sum(harga*jumlah) FROM `pengeluarans`')->get();

        return $datakeluar;
        //  return view('home',['keluar'=>$datakeluar]);
    }

  

    public function kolam()
    {
        return view('kolam');
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
