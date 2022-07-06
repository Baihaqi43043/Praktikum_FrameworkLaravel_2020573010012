@extends('layouts.app')

@section('content')
@section('menuKolam','active')
<div class="container-fluid p-0">
    <div class="col-12 col-md-8 offset-md-2">
        <h1 class="text-center"><strong>Tambah Kolam Baru</strong></h1>
        <form action="{{url('/kolam/create-tambahkolam')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputJumlah" class="form-label">Nama Kolam</label>
                <input type="text" name="kolam" class="form-control "id="exampleInputnamakolam">
              </div>

            <div class="mb-3">
              <label for="exampleInputJumlah" class="form-label">Jumlah Tebar</label>
              <input type="text" name="jumlah" class="form-control input-currency"id="exampleInputJumlah">
            </div>
            <div class="col-3">
                <button type="submit" class="btn btn-primary tambah">Tambah</button>
            </div>
          </form>
    </div>
</div>

 <script>
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
