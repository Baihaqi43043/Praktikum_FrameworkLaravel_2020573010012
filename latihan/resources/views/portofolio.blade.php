{{-- @include('layout.header',['title'=>'Data Mahasiswa']) --}}
@extends('layout.master')
@section('title','portofolio')
@section('menuPortofolio','active')
    @section('content')
       <div class="container">
         <div class="row">
           <div class="col-12 fs-2 fw-bold text-center mt-3">Portofolio</div>
           <div class="col-6 fs-5 mt-4">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Proin tristique nisl pharetra morbi eu. Faucibus porttitor 
            elit risus orci, purus. Tristique scelerisque risus scelerisque 
            pharetra tristique amet vel maecenas tellus. 
            Enim id posuere  Proin tristique nisl pharetra morbi eu. Faucibus porttitor 
            elit risus orci, purus. Tristique scelerisque risus scelerisque 
            pharetra tristique amet vel maecenas tellus.
            <button type="button" class="btn btn-outline-primary rounded-pill d-block mt-4" style="width: 10rem">Contact Us</button>
           </div>
           <div class="col-6 text-center">
             <img src="{{asset('img/porto.png')}}" alt="" style="width: 390px; height: 390px;">
           </div>
         </div>
       </div>
    @endsection
{{-- @include('layout.footer') --}}