@extends('layouts.app')

@section('main')
<div class="border rounded mt-5 mx-auto d-flex flex-column align-items-stretch bg-white" style="width: 380px;">
        <div class="d-flex justify-content-between flex-shrink-0 p-3 link-dark  border-bottom">
            <h1>Daftar Mahasiswa</h1>
        </div>
        <ol>
            <li>{{$mahasiswa1}}</li>
            <li>{{$mahasiswa2}}</li>
            <li>{{$mahasiswa3}}</li>
            <li>{{$mahasiswa4}}</li>
        </ol>
    </div>
@endsection