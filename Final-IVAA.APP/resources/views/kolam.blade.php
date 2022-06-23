@extends('layouts.app')

@section('content')
@section('menuKolam','active')
<div class="container-fluid p-0">
    <h1 class="h3 mb-3"><strong>Kolam</strong> Dashboard</h1>

  
    <table class="table table-hover my-0">
        <thead>
          <tr class="table-info">
            <th scope="col">ID Kolam</th>
            <th scope="col">Nama Kolam</th>
            <th scope="col">Nama Karyawan</th>
            <th scope="col">Jumlah tebar</th>
            <th scope="col">Pengeluaran</th>
            <th scope="col">Pemasukan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Kolam 1</td>
            <td>Mark, Jhon</td>
            <td>90.000</td>
            <td>Rp.20.000.000</td>
            <td>Rp.50.000.000</td>
            <td><a href="detail-kolam"><button type="button" class="btn btn-info btn-sm mb-2 mb-sm-0">info</button></a>
              <button type="button" class="btn btn-danger btn-sm">Hapus</button></td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Kolam 2</td>
            <td>Mark, Jhon</td>
            <td>90.000</td>
            <td>Rp.20.000.000</td>
            <td>Rp.50.000.000</td>
            <td><a href="detail-kolam"><button type="button" class="btn btn-info btn-sm mb-2 mb-sm-0">info</button></a>
              <button type="button" class="btn btn-danger btn-sm">Hapus</button></td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Kolam 3</td>
            <td>Mark, Jhon</td>
            <td>90.000</td>
            <td>Rp.20.000.000</td>
            <td>Rp.50.000.000</td>
            <td><a href="detail-kolam"><button type="button" class="btn btn-info btn-sm mb-2 mb-sm-0">info</button></a>
              <button type="button" class="btn btn-danger btn-sm">Hapus</button></td>
          </tr>
        </tbody>
      </table>
</div>
@endsection
