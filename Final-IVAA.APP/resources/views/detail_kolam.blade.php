@extends('layouts.app')

@section('content')
@section('menuKolam','active')
<div class="container-fluid p-0 mb-4">
  <a href="kolam"><button type="button" class="btn btn-primary mb-2"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
  </svg></button></a>
    <h1 class="h3 mb-3"><strong>Detail nama Kolam</strong> Dashboard</h1>
    <h1 class="h3 mb-3"><strong>Pengeluaran</strong></h1>
    <div class="my-3 ">
      <button type="button" class="btn btn-success ">Tambah Pengeluaran</button>
  </div>
    <table class="table table-hover my-0">
        <thead>
          <tr class="table-info">
            <th scope="col">ID</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Nama barang</th>
            <th scope="col">Harga</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>12-5-2022</td>
            <td>Pakan 02</td>
            <td>Rp.430.000</td>
            <td>4</td>
            <td><a href="detail-karyawan"><button type="button" class="btn btn-warning btn-sm mb-2 mb-sm-0">Edit</button></a>
              <a href="detail-karyawan"><button type="button" class="btn btn-danger btn-sm">Hapus</button></a>
            </td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>12-5-2022</td>
            <td>Pakan 02</td>
            <td>Rp.430.000</td>
            <td>4</td>
            <td><a href="detail-karyawan"><button type="button" class="btn btn-warning btn-sm mb-2 mb-sm-0">Edit</button></a>
              <a href="detail-karyawan"><button type="button" class="btn btn-danger btn-sm">Hapus</button></a>
            </td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>12-5-2022</td>
            <td>Pakan 02</td>
            <td>Rp.430.000</td>
            <td>4</td>
            <td><a href="detail-karyawan"><button type="button" class="btn btn-warning btn-sm mb-2 mb-sm-0">Edit</button></a>
              <a href="detail-karyawan"><button type="button" class="btn btn-danger btn-sm">Hapus</button></a>
            </td>
          </tr>
          <tr>
            <td colspan="6" class="text-center"><strong>Total = Rp.2.430.000</strong></td>
          </tr>
        </tbody>
      </table>
</div>

<div class="container-fluid p-0">
      <h1 class="h3 mb-3"><strong>Pemasukan</strong></h1>
      <div class="my-3">
        <button type="button" class="btn btn-success">Tambah Pemasukan</button>
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
        </tr>
        <tr>
          <td colspan="6" class="text-center"><strong>Total = Rp.2.430.000</strong></td>
        </tr>
          </tbody>
        </table>
  </div>
@endsection
