@extends('layouts.app')

@section('content')
@section('menuKolam','active')
<div class="container-fluid p-0">
    <div class="col-12 col-md-8 offset-md-2">
        <h1 class="text-center"><strong>Tambah Pengeluaran Baru</strong></h1>
        <p style="opacity: 0; position: absolute; user-select: none; cursor: default;" id="harga">@foreach ($dataBarang as $barang)
            {{$barang->harga}} 
        @endforeach</p>
        <p style="opacity: 0; position: absolute; user-select: none; cursor: default;" id="namabarang">@foreach ($dataBarang as $barang)
            {{$barang->nama_barang}},
        @endforeach</p>
        <p style="opacity: 0; position: absolute; user-select: none; cursor: default;" id="nama_kolam">@foreach ($dataKolam as $kolam)
            {{$kolam->nama_kolam}},
        @endforeach</p>
        <p style="opacity: 0; position: absolute; user-select: none; cursor: default;" id="tebar">@foreach ($dataKolam as $kolam)
            {{$kolam->jumlah_tebar}} 
        @endforeach</p>
        <form action="{{url('/kolam/create-tambahKeluar')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputnama barang" class="form-label">Pilih Kolam</label>
                <select name="id_kolam" id="kolam" class="form-select" aria-label="Default select example">
                    <option selected>Pilih Kolam</option>
                    @foreach ($dataKolam as $kolam)
                    <option value="{{$kolam->id_kolam}}">{{$kolam->nama_kolam}}</option>
                    @endforeach
                  </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputnamabarang" class="form-label">Pilih Barang</label>
                <select id="barang" name="idbarang" class="form-select" aria-label="Default select example">
                    <option selected>Pilih Barang</option>
                    @foreach ($dataBarang as $barang)
                    <option value="{{$barang->id_barang}}">{{$barang->nama_barang}}</option>
                    @endforeach
                  </select>
            </div>
            <div class="mb-3">
              <label for="exampleInputJumlah" class="form-label">Jumlah</label>
              <input type="text" name="jumlah" class="form-control input-currency"id="exampleInputJumlah">
            </div>
            <div class="mb-3">
                <label for="exampleInputJumlah" class="form-label">Harga</label>
                <input id="input_harga" type="text" name="harga" class="form-control "id="exampleInputharga">
              </div>
              {{-- visually-hidden --}}
              <div class="mb-3 visually-hidden">
                <label for="exampleInputJumlah" class="form-label">Nama Barang</label>
                <input id="nama_barang" type="text" name="namabarang" class="form-control "id="exampleInputharga">
              </div>
              <div class="mb-3 visually-hidden">
                <label for="exampleInputJumlah" class="form-label">Nama Kolam</label>
                <input id="isi_kolam" type="text" name="nama_kolam" class="form-control "id="exampleInputharga">
              </div>
              <div class="mb-3 visually-hidden">
                <label for="exampleInputJumlah" class="form-label">Jumlah Tebar</label>
                <input id="isi_tebar" type="text" name="jumlah_tebar" class="form-control "id="exampleInputharga">
              </div>
            <div class="col-3 ">
                <button type="submit" class="btn btn-primary  tambah">Tambah</button>
            </div>
          </form>
    </div>
</div>
<script>
    let text = document.getElementById("harga").innerText;
    let list_harga = text.split(" ");

    let barang = document.getElementById("namabarang").innerText;
    let list_barang = barang.split(",");

    let nmKolam = document.getElementById("nama_kolam").innerText;
    let list_kolam = nmKolam.split(",");

    let jmTebar = document.getElementById("tebar").innerText;
    let list_tebar = jmTebar.split(" ");

    document.getElementById("barang").addEventListener("change", ()=>{
        if(document.getElementById("barang").selectedIndex == 0){
            document.getElementById("input_harga").value = 0;
        }else{
            let index = document.getElementById("barang").selectedIndex - 1;
            document.getElementById("input_harga").value = "Rp." + list_harga[index].replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            document.getElementById("nama_barang").value = list_barang[index];
                }
    });

    document.getElementById("kolam").addEventListener("change", ()=>{
        if(document.getElementById("kolam").selectedIndex == 0){
            document.getElementById("isi_tebar").value = 0;
        }else{
            let index = document.getElementById("kolam").selectedIndex - 1;
            document.getElementById("isi_tebar").value = list_tebar[index];
            document.getElementById("isi_kolam").value = list_kolam[index];
                }
    });

    $('.tambah').click(function(){
  swal({
  title: "Data Berhasil di tambah!",
  text: "Data Kamu berhasil di tambah!",
  icon: "success",
  button: "Aww yiss!",
});
 });
</script>
@endsection
