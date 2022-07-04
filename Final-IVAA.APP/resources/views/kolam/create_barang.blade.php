@extends('layouts.app')

@section('content')
@section('menuKolam','active')
<div class="container-fluid p-0">
    <div class="col-12 col-md-8 offset-md-2">
        <h1 class="text-center"><strong>Tambah Barang Baru</strong></h1>
        <form action="{{url('/kolam/create-tambahBarang')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputJumlah" class="form-label">Nama Barang</label>
                <input type="text" name="nama" class="form-control input-currency"id="exampleInputBarang">
              </div>
            <div class="mb-3">
                <label for="exampleInputJumlah" class="form-label">Harga Barang</label>
                <input type="text" name="harga" class="form-control input-currency" type-currency="IDR" placeholder="Rp" id="exampleInputJumlah">
              </div>
            <div class="col-3">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
            
          </form>
    </div>
</div>
<script>
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
   </script>
@endsection
