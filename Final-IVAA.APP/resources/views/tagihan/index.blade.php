@extends('layouts.app')

@section('content')
@section('menuTagihan','active')
<div class="container-fluid p-0">
    <h1 class="h3 mb-3"><strong>Tagihan</strong> Dashboard</h1>
    <div class="row">
      <div class="col-12 mb-1  col-md-6">
        <a href=""><button style="width: 100%" type="button" class="btn btn-primary">Tambah Tagihan</button></a>
      </div>
      <div class="col-12 mb-1  col-md-6">
        <a href=""><button style="width: 100%" type="button" class="btn btn-success">Tambah Rekening</button></a>
      </div>
    </div>
    


  <table class="table table-hover my-0">
      <thead>
        <tr class="table-info">
          <th scope="col">No</th>
          <th scope="col">Rekening Tagihan</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Jumlah</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>1</th>
          <td>M.nasir</td>
          <td>11-12-2022</td>
          <td>Rp. 1.000.000</td>
          <td><a href="detail-kolam"><button type="button" class="btn btn-warning btn-sm mb-2 mb-sm-0">Edit</button></a>
            <button type="button" class="btn btn-danger btn-sm">Hapus</button></td>
        </tr>
        <tr class="text-center">
          <td colspan="3"><strong>Total Tagihan = </strong></td>
        </tr>
       
      </tbody>
    </table>
</div>
@endsection
