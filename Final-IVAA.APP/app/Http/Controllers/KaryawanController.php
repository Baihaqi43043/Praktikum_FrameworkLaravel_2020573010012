<?php

namespace App\Http\Controllers;

use App\helper\helperIDR;
use App\Models\karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    
    public function index()
    {
        $dataKaryawan = DB::table('karyawan')->get();

        $data = DB::table('karyawan')
        ->join('peminjaman', 'peminjaman.id_karyawan', '=', 'karyawan.id_karyawan')
        ->get();
        return view('karyawan.index',compact('data','dataKaryawan'));
    }
    public function filter()
    {
        $dataKaryawan = DB::table('karyawan')->get();

        $id = request()->get('id_karyawan');

        $data = DB::table('karyawan')
            ->join('peminjaman', 'karyawan.id_karyawan', '=', 'peminjaman.id_karyawan')
            ->where('peminjaman.id_karyawan','=', $id)
            ->get();
       
        

        return view('karyawan.index',compact('data','dataKaryawan'));
    }
    public function create()
    {
        return view('karyawan.create');
    }
    public function pinjam()
    {
        $dataKaryawan = DB::table('karyawan')->get();
        return view('karyawan.create_peminjaman', compact('dataKaryawan'));
    }

    public function store(Request $request)
    {
        DB::table('karyawan')->insert([
            'nama'=> $request->nama,
            'alamat'=> $request->alamat,
            'umur'=> $request->umur
        ]);
        return redirect('karyawan/index');
    }

    public function storePinjam(Request $request)
    {
        DB::table('peminjaman')->insert([
            'id_karyawan'=> $request->id_karyawan,
            'tanggal'=> $request->tanggal,
            'jumlah'=>currencyIDRTONumeric($request->jumlah) ,
            'keterangan'=>$request->keterangan
        ]);
        return redirect('karyawan/index');
    }
}
