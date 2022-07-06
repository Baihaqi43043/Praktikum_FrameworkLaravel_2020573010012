<?php

namespace App\Http\Controllers;

use App\Models\tagihan;
use Illuminate\Http\Request;

class TagihanController extends Controller
{
    public function tagihan()
    {
        $data = tagihan::all();
        return view('tagihan.index', compact('data'));
    }
    public function Tmbtagihan()
    {
        return view('tagihan.create_tagihan');
    }
    public function storeTagihan(Request $request)
    {
        tagihan::insert([
            'rek_tagihan' => $request->namarek,
            'tanggal' => $request->date,
            'jumlah' => currencyIDRTONumeric($request->jumlah),
            'created_at' => now(),
        ]);
        return redirect('tagihan');
    }

    public function destroy($id )
    {
      tagihan::where('id_tagihan', $id)->delete();
      return redirect('tagihan');
    }

    public function edit($id)
    {
        $edit = tagihan::where('tagihans.id_tagihan', $id)->first();
    //    $edit=DB::table('peminjaman')->where('id_karyawan', $id)->first();
    //    dd($edit);
        return view('tagihan.edit_tagihan',['edit'=>$edit]);
    }

    public function update(Request $request, $id )
    {
        tagihan::where('id_tagihan', $id)->update([
            'rek_tagihan'=>$request->namarek,
            'tanggal'=>$request->date,
            'jumlah'=>currencyIDRTONumeric($request->jumlah)
        ]);
        return redirect('tagihan');
    }

}
