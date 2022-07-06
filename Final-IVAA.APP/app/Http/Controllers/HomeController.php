<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\kolam;
use App\Models\pengeluaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $karyawan = Karyawan::count('id_karyawan');

        $kolam = kolam::count('id_kolam');

        $datakeluar = DB::table('log_kolams')->select(DB::raw("SUM(totalKeluar) as count"))
        ->get();

        $datamasuk = DB::table('log_kolams')->select(DB::raw("SUM(totalMasuk) as count"))
        ->get();
        return view('home',compact('datakeluar','datamasuk','karyawan','kolam'));
    }
   
}
