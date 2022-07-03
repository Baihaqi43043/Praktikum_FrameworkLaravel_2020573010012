<?php

namespace App\Http\Controllers;

use App\helper\helperIDR;
use App\Models\karyawan;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    
    public function index()
    {
        $dataKaryawan = karyawan::all();

        $data = karyawan::join('peminjamans','karyawans.id_karyawan','=','peminjamans.karyawan_id')
        ->select('karyawans.*','peminjamans.*')
        ->get();
        
        return view('karyawan/index',compact('data','dataKaryawan'));
    }
    public function filter()
    {
        $dataKaryawan = karyawan::all();

        $id = request()->get('id_karyawan');

        $data = karyawan::join('peminjamans','karyawans.id_karyawan','=','peminjamans.karyawan_id')
        ->select('peminjamans.*','karyawans.nama','karyawans.alamat')
        ->where('peminjamans.karyawan_id','=', $id)
        ->get();

        return view('karyawan.index',compact('data','dataKaryawan'));
    }
    public function create()
    {
        return view('karyawan.create');
    }
    public function pinjam()
    {
        $dataKaryawan = karyawan::all();
        return view('karyawan.create_peminjaman', compact('dataKaryawan'));
    }

    public function store(Request $request)
    {
        karyawan::insert([
            'nama'=> $request->nama,
            'alamat'=> $request->alamat,
            'umur'=> $request->umur
        ]);
        return redirect('karyawan/index');
    }
    public function edit($id)
    {
        $edit = Peminjaman::where('peminjamans.karyawan_id', $id)->first();
    //    $edit=DB::table('peminjaman')->where('id_karyawan', $id)->first();
    //    dd($edit);
        return view('karyawan.edit_pinjam',['edit'=>$edit]);
    }

    public function update(Request $request, $id )
    {
        Peminjaman::where('id_peminjaman', $id)->update([
            'tanggal'=>$request->tanggal,
            'jumlah'=>currencyIDRTONumeric($request->jumlah),
            'keterangan'=>$request->ket
        ]);

        return redirect('karyawan/index');
    }
    

    public function destroy($id )
    {
      Peminjaman::where('id_peminjaman', $id)->delete();
      return redirect('karyawan/index');
    }
    

    public function storePinjam(Request $request)
    {
        Peminjaman::insert([
            'karyawan_id'=> $request->id_karyawan,
            'tanggal'=> $request->tanggal,
            'jumlah'=>currencyIDRTONumeric($request->jumlah) ,
            'keterangan'=>$request->keterangan
        ]);
        return redirect('karyawan/index');
    }
}
