@extends('layouts.app')

@section('content')
@section('menuKolam','active')
<div class="container-fluid p-0">
    <h1 class="h3 mb-3"><strong>Kolam</strong> Dashboard</h1>
    {{-- filter:start --}}
  <form action="{{url('/kolam/filter')}}" class="row" method="POST">
    @csrf
    <div class="form-grup row mt-2 ">
      <div class="col-10 col-md-10 col-lg-4">
        <select name="nama_kolam" class="form-select">
          <option selected>Pilih Kolam</option>
           @foreach ($kolam as $item)
              <option value="{{ $item->nama_kolam }}">
                 {{ $item->nama_kolam }}</option>
           @endforeach
        </select>
     </div>
     <div class="col-2 col-md-1 ">
      <button type="submit" class="btn btn-primary mb-3">Filter</button>
   </div>
   <div class="col-12 mb-1 offset-md-2 col-md-2 ">
    <a href="{{url('kolam/tambahkolam')}}"><button style="width: 100%" type="button" class="btn btn-primary">Print Data</button></a>
  </div>
 </form>
 {{-- filter:end --}}
      <div class="row ">
        <div class="col-12 mb-1 col-md-2">
          <a href="{{url('kolam/tambahkolam')}}"><button style="width: 100%" type="button" class="btn btn-primary">Tambah Kolam</button></a>
        </div>
        <div class="col-12 mb-1 col-md-3">
          <a href="{{url('kolam/tambahKeluar')}}"><button style="width: 100%" type="button" class="btn btn-warning">Tambah Pengeluaran</button></a>
          
        </div>
        <div class="col-12 mb-1 col-md-3">
          <a href="{{url('kolam/tambahMasuk')}}"> <button style="width: 100%" type="button" class="btn btn-success">Tambah Pemasukan</button></a>
         
        </div>
        <div class="col-12 mb-1 col-md-2 me-lg-4">
          <a href="{{url('kolam/tambahBarang')}}"> <button style="width: 100%" type="button" class="btn btn-secondary">Tambah Barang</button></a>
        </div>
      </div>
      

  
    <table class="table table-hover my-0">
        <thead>
          <tr class="table-info">
            <th scope="col">No</th>
            <th scope="col">Nama Kolam</th>
            <th scope="col">Jumlah tebar</th>
            <th scope="col">Pengeluaran</th>
            <th scope="col">Pemasukan</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $totalK = 0;
          $totalM = 0;
          $no = 0 ;
          ?>
          @foreach ($data as $item)
          <?php
          $totalK += $item->totalKeluar;
          $totalM += $item->totalMasuk;
          $no += 1;
          ?>
          <tr>
            <th>{{$no}}</th>
            <td>{{$item->nama_kolam}}</td>
            <td>{{intTOrb($item->jumlah_tebar)}}</td>
            <td>{{currency_IDR($item->totalKeluar)}}</td>
            <td>{{currency_IDR($item->totalMasuk)}}</td>
            <td>{{$item->keterangan}}</td>
            <td>
              <button type="button" class="btn btn-danger btn-sm delete" data-id="{{$item->id_log}}" data-ket="{{$item->keterangan}}">Hapus</button></td>
          </tr>
          @endforeach
          <tr class="text-center">
            <td colspan="3"><strong>Total Pengeluaran = {{currency_IDR($totalK)}} </strong></td>
            <td colspan="3"><strong>Total Pemasukan = {{currency_IDR($totalM)}}</strong></td>
          </tr>
         
        </tbody>
      </table>
</div>
<script>

  $('.delete').click( function(){
    var kolamid = $(this).attr('data-id');
    var ket = $(this).attr('data-ket');
            swal({
          title: "Yakin Menghapus Data?",
          text: "Anda akan menghapus data transaksi keterangan "+ket+" !",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            window.location = ""+kolamid+"/hapus"
            swal("Data Kolam Berhasil Di hapus!", {
              icon: "success",
            });
          } else {
            swal("Data tidak jadi di hapus!");
          }
        });
  });
</script>
@endsection
