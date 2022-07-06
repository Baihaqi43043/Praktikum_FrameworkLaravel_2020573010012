@extends('layouts.app')

@section('content')
@section('menuKolam','active')
<div class="container-fluid p-0">
    <div class="col-12 col-md-8 offset-md-2">
        <h1 class="text-center"><strong>Tambah Pemasukan Baru</strong></h1>
        <form action="{{url('/kolam/create-tambahMasuk')}}" method="POST">
          <p style="opacity: 0; position: absolute; user-select: none; cursor: default;" id="nama_kolam">@foreach ($dataKolam as $kolam)
            {{$kolam->nama_kolam}},
        @endforeach</p>
        <p style="opacity: 0; position: absolute; user-select: none; cursor: default;" id="tebar">@foreach ($dataKolam as $kolam)
            {{$kolam->jumlah_tebar}} 
        @endforeach</p>
            @csrf
            <div class="mb-3">
                <label for="exampleInputnama barang" class="form-label">Pilih Kolam</label>
                <select id="id_kolam" name="id_Kolam" class="form-select" aria-label="Default select example">
                    <option selected>Pilih Kolam</option>
                    @foreach ($dataKolam as $kolam)
                    <option value="{{$kolam->id_kolam}}">{{$kolam->nama_kolam}}</option>
                    @endforeach
                  </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputJumlah" class="form-label">Keterangan Masuk</label>
                <input type="text" name="ket" class="form-control input-currency"id="exampleInputJumlah">
              </div>
            <div class="mb-3">
              <label for="exampleInputJumlah" class="form-label">Jumlah Berat</label>
              <input type="text" name="jumlah" class="form-control input-currency"id="exampleInputJumlah">
            </div>
            <div class="mb-3">
                <label for="exampleInputJumlah" class="form-label">Harga Perkilo</label>
                <input type="text" name="harga" class="form-control input-currency" type-currency="IDR" placeholder="Rp" id="exampleInputJumlah">
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
                <button type="submit" class="btn btn-primary tambah">Tambah</button>
            </div>
          </form>
    </div>
</div>
<script>
 let nmKolam = document.getElementById("nama_kolam").innerText;
    let list_kolam = nmKolam.split(",");

    let jmTebar = document.getElementById("tebar").innerText;
    let list_tebar = jmTebar.split(" ");

    document.getElementById("id_kolam").addEventListener("change", ()=>{
        if(document.getElementById("id_kolam").selectedIndex == 0){
            document.getElementById("isi_tebar").value = 0;
        }else{
            let index = document.getElementById("id_kolam").selectedIndex - 1;
            document.getElementById("isi_tebar").value = list_tebar[index];
            document.getElementById("isi_kolam").value = list_kolam[index];
                }
    });


    document.querySelectorAll('input[type-currency="IDR"]').forEach((element) => {
  element.addEventListener('keyup', function(e) {
  let cursorPostion = this.selectionStart;
    let value = parseInt(this.value.replace(/[^,\d]/g, ''));
    let originalLenght = this.value.length;
    if (isNaN(value)) {
      this.value = "";
    } else {    
      this.value = value.toLocaleString('id-ID', {
        currency: 'IDR',
        style: 'currency',
        minimumFractionDigits: 0
      });
      cursorPostion = this.value.length - originalLenght + cursorPostion;
      this.setSelectionRange(cursorPostion, cursorPostion);
    }
  });
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
