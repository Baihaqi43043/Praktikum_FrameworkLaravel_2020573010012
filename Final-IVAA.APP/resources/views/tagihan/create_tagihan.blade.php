@extends('layouts.app')

@section('content')
@section('menuTagihan','active')
<div class="container-fluid p-0">
    <div class="col-12 col-md-8 offset-md-2">
       @php
           {{$mytime = Carbon\Carbon::now()->toDateString();}}
       @endphp
        <h1 class="text-center"><strong>Tambah Tagihan Baru</strong></h1>
               <form action="{{url('/tagihan/create-tagihan')}}" method="POST">
                @csrf
            <div class="mb-3">
              <label for="exampleInputnama" class="form-label">Nama Rekening</label>
              <input type="text" name="namarek" class="form-control" id="exampleInputnama" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputAlamat" class="form-label">Tanggal</label>
              <input type="date" name="date" value="{{$mytime}}" class="form-control" id="exampleInputAlamat">
            </div>

            <div class="mb-3">
                <label for="exampleInputJumlah" class="form-label">Jumlah</label>
                <input type="text" name="jumlah" class="form-control input-currency" type-currency="IDR" placeholder="Rp" id="exampleInputJumlah">
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
