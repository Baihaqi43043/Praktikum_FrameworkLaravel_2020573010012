@extends('layouts.app')

@section('content')
@section('menuKaryawan','active')
<div class="container-fluid p-0">
    <h1 class="h3 mb-3"><strong>Karyawan</strong> Dashboard</h1>
    <div class="my-3">
      <button type="button" class="btn btn-success">Tambah Data Karyawan</button>
      <button type="button" class="btn btn-warning">Tambah Data Peminjaman</button>
  </div>
    <table class="table table-hover my-0">
        <thead>
          <tr class="table-info">
            <th scope="col">ID</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Umur</th>
            <th scope="col">Jumlah Peminjaman</th>
            <th scope="col">Detail</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Pangoi</td>
            <td>30</td>
            <td>Rp.1.800.000</td>
            <td><a href="detail-karyawan"><button type="button" class="btn btn-info btn-sm mb-2 mb-sm-0">Info</button></a>
              <button type="button" class="btn btn-danger btn-sm">Hapus</button></td>
          </tr>
          </tr>
          <tr class="table-light">
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>30</td>
            <td>Rp.1.800.000</td>
            <td><a href="detail-karyawan"><button type="button" class="btn btn-info btn-sm mb-2 mb-sm-0">Info</button></a>
              <button type="button" class="btn btn-danger btn-sm">Hapus</button></td>
          </tr>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry the Bird</td>
            <td>krukuh</td>
            <td>30</td>
            <td>Rp.1.800.000</td>
            <td><a href="detail-karyawan"><button type="button" class="btn btn-info btn-sm mb-2 mb-sm-0">Info</button></a>
             <button type="button" class="btn btn-danger btn-sm">Hapus</button>
             </td>
          </tr>
        </tbody>
      </table>
</div>
@endsection
