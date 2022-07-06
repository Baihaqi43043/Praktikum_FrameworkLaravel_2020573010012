<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\kolam;
use App\Models\log_kolam;
use App\Models\pemasukan;
use App\Models\pengeluaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class KolamController extends Controller
{
    public function index()
    {
        $kolam = kolam::all();

        $data = DB::table('log_kolams')->get();
         return view('kolam.index',compact('data','kolam'));
    }

    public function filter()
    {
        $kolam = kolam::all();
        $nama = request()->get('nama_kolam');
        $data = DB::table('log_kolams')->where('nama_kolam','LIKE','%'.$nama.'%')->get();
         return view('kolam.index',compact('data','kolam'));
    }

    public function TmbKolam()
    {
        return view('kolam.create_kolam');
    }

    public function TmbKeluar()
    {
        $dataKolam = kolam::all();
        $dataBarang = barang::all();
        return view('kolam.create_pengeluaran',compact('dataKolam','dataBarang'));
    }
    public function TmbMasuk()
    {
        $dataKolam = kolam::all();
       
        return view('kolam.create_pemasukan',compact('dataKolam'));
    }
    public function TmbBarang()
    {
       
        return view('kolam.create_barang');
    }

    public function storeKolam(Request $request)
    {
       kolam::insert([
        'nama_kolam'=> $request->kolam,
        'jumlah_tebar'=> $request->jumlah
    ]);
    return redirect('kolam/index');
    }

    public function storeKeluar(Request $request)
    {
       pengeluaran::insert([
        'id_kolam'=> $request->id_kolam,
        'id_barang'=> $request->idbarang,
        'nama_barang'=> $request->namabarang,
        'jumlah'=> $request->jumlah,
        'nama_kolam'=> $request->nama_kolam,
        'jumlah_tebar'=>$request->jumlah_tebar,
        'harga'=>currencyIDRTONumeric($request->harga),
        'created_at'=>now()
        ]);
    return redirect('kolam/index');
    }

    public function storeMasuk(Request $request)
    {
       pemasukan::insert([
        'id_kolam'=> $request->id_Kolam,
        'keterangan'=> $request->ket,
        'jumlah_kg'=> $request->jumlah,
        'harga'=>currencyIDRTONumeric($request->harga),
        'nama_kolam'=> $request->nama_kolam,
        'jumlah_tebar'=>$request->jumlah_tebar,
        'created_at'=>now()
        ]);
    return redirect('kolam/index');
    }

    public function storeBarang(Request $request)
    {
       barang::insert([
        'nama_barang'=> $request->nama,
        'harga'=> currencyIDRTONumeric($request->harga)
        ]);
    return redirect('kolam/index');
    }

    public function destroy($id )
    {
      log_kolam::where('id_log', $id)->delete();
      return redirect('kolam/index');
    }

}
