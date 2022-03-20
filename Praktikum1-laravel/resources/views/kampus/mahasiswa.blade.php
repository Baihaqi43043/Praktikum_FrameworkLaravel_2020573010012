@extends('layout.app')

@section('main')
<div class="border rounded mt-5 mx-auto d-flex flex-column align-items-stretch bg-white" style="width: 380px;">
        <div class="d-flex justify-content-between flex-shrink-0 p-3 link-dark  border-bottom">
            <h1>Daftar Mahasiswa</h1>
        </div>
        <table class="table">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Mahasiswa</th>
                    <th scope="col">Nilai</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>{{$mahasiswa}}</td>
                    <td>{{$nilai}}</td>
                  </tr>
                </tbody>
              </table>
    </div>
    <div class="container text-center mt-3 py-3 bg-white">
<h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{$mahasiswa}}</h1>
<h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{$nilai}}</h1>
    </div>
@endsection