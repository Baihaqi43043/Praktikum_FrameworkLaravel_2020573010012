{{-- @include('layout.header',['title'=>'Data Dosen']) --}}
@extends('layout.master')
@section('title','home')
@section('menuHome','active')
    @section('content')
       <div class="container-fluid hero">
           <br><br><br><br><br>
           <h1 class="text-white fw-bolder text-center" style="font-size: 3.4rem">Suplayer Udang Dan Ikan <br> Terbaik Di Indonesia</h1>
           <p class="text-white fs-4 text-center mx-auto mt-4" style="width: 40rem">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Mauris sollicitudin neque vulputate viverra amet.</p>
            <div class="mx-auto mt-5" style="width: max-content">
                <button type="button" class="btn btn-primary rounded-pill text-center mx-auto fw-bolder" style="width: 10rem">Contact Us</button>
                <button type="button" class="btn btn-outline-primary rounded-pill text-center mx-auto fw-bolder" style="width: 10rem">Lihat Price</button>
            </div>
          
       </div>
    @endsection

{{-- @include('layout.footer') --}}