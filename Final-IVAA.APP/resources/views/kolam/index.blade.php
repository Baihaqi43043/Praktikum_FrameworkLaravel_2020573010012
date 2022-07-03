@extends('layouts.app')

@section('content')
@section('menuKolam','active')
<div class="container-fluid p-0">
    <h1 class="h3 mb-3"><strong>Kolam</strong> Dashboard</h1>
      <div class="row justify-content-lg-center">
        <div class="col-12 offset-md-1 offset-lg-0 col-md-10 mb-1 mb-md-2 ms-lg-4">
          <select class="form-select ms-lg-3" aria-label="Default select example">
            <option selected>Filter Kolam</option>
            @foreach ($data as $item)
            <a href=""><option value="{{$item->id_kolam}}">{{$item->nama_kolam}}</option></a>
            @endforeach
          </select>
        </div>
        <div class="col-12 mb-1 offset-md-1 col-md-2">
          <button style="width: 100%" type="button" class="btn btn-primary">Tambah Kolam</button>
        </div>
        <div class="col-12 mb-1 col-md-3">
          <button style="width: 100%" type="button" class="btn btn-warning">Tambah Pengeluaran</button>
        </div>
        <div class="col-12 mb-1 col-md-3">
          <button style="width: 100%" type="button" class="btn btn-success">Tambah Pemasukan</button>
        </div>
        <div class="col-12 mb-1 col-md-2 me-lg-4">
          <button style="width: 100%" type="button" class="btn btn-secondary">Tambah Barang</button>
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
            <td><a href="detail-kolam"><button type="button" class="btn btn-info btn-sm mb-2 mb-sm-0">info</button></a>
              <button type="button" class="btn btn-danger btn-sm">Hapus</button></td>
          </tr>
          @endforeach
          <tr class="text-center">
            <td colspan="3"><strong>Total Pengeluaran = {{currency_IDR($totalK)}} </strong></td>
            <td colspan="3"><strong>Total Pemasukan = {{currency_IDR($totalM)}}</strong></td>
          </tr>
         
        </tbody>
      </table>
</div>
@endsection
