@extends('layouts.app')

@section('content')
@section('menuKaryawan','active')
<div class="container-fluid p-0">
    <div class="col-12 col-md-8 offset-md-2">
        <h1 class="text-center"><strong>Tambah Karyawan Baru</strong></h1>
        @csrf
        <form action="{{url('/karyawan/create')}}" method="POST">
            <div class="mb-3">
              <label for="exampleInputnama" class="form-label">Nama</label>
              <input type="text" name="nama" class="form-control" id="exampleInputnama" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputAlamat" class="form-label">Alamat</label>
              <input type="text" name="alamat" class="form-control" id="exampleInputAlamat">
            </div>

            <div class="mb-3">
              <label for="exampleInputUmur" class="form-label">Umur</label>
              <input type="text" name="umur" class="form-control" id="exampleInputUmur">
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
