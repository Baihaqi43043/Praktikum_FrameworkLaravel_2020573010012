@extends('layouts.app')

@section('content')
@section('menuKaryawan','active')
<div class="container-fluid p-0">
  <a href="karyawan"><button type="button" class="btn btn-primary mb-2"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
  </svg></button></a>
    <h1 class="h3 mb-3"><strong>Detail nama karyawan</strong> Dashboard</h1>
    <div class="my-3">
      <button type="button" class="btn btn-success">Tambah Pinjaman</button>
  </div>
    <table class="table table-hover my-0">
        <thead>
          <tr class="table-info">
            <th scope="col">ID</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>12-5-2022</td>
            <td>Rp.200.000</td>
            <td>Pinjaman</td>
            <td><a href="detail-karyawan"><button type="button" class="btn btn-warning btn-sm mb-2 mb-sm-0">Edit</button></a>
              <a href="detail-karyawan"><button type="button" class="btn btn-danger btn-sm">Hapus</button></a>
            </td>
          </tr>
          </tr>
          <tr class="table-light">
            <th scope="row">1</th>
            <td>12-5-2022</td>
            <td>Rp.200.000</td>
            <td>Pinjaman</td>
            <td><a href="detail-karyawan"><button type="button" class="btn btn-warning btn-sm mb-2 mb-sm-0">Edit</button></a>
              <a href="detail-karyawan"><button type="button" class="btn btn-danger btn-sm">Hapus</button></a>
            </td>
          </tr>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>12-5-2022</td>
            <td>Rp.200.000</td>
            <td>Uang kerja</td>
            <td><a href="detail-karyawan"><button type="button" class="btn btn-warning btn-sm mb-2 mb-sm-0">Edit</button></a>
              <a href="detail-karyawan"><button type="button" class="btn btn-danger btn-sm">Hapus</button></a>
            </td>
          </tr>
        </tbody>
      </table>
</div>
@endsection
