{{-- @include('layout.header',['title'=>'Galery']) --}}
@extends('layout.master')
@section('title','About')
@section('menuAbout','active')
    @section('content')
       <div class="container kotak my-4">
        <div class="row">
            <div class="col12 fs-2 fw-bolder text-center">About</div>
            <div class="col-6">
                <img src="{{asset("img/imgabout.png")}}" alt="" style="width: 500px; height:500px">
            </div>
            <div class="col-6 fs-5 mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Proin tristique nisl pharetra morbi eu. Faucibus porttitor 
                elit risus orci, purus. Tristique scelerisque risus scelerisque 
                pharetra tristique amet vel maecenas tellus. 
                Enim id posuere 
                <br> <br><br>
                Sagittis in vitae elit elementum condimentum 
                viverra pellentesque nisi, nibh. Aliquam convallis 
                euismod in non consectetur eget.
                <button type="button" class="btn btn-outline-primary d-block mt-4 rounded-pill" style="width: 10rem">Wacth</button></div>
                
        </div>
       </div>
    @endsection

{{-- @include('layout.footer') --}}