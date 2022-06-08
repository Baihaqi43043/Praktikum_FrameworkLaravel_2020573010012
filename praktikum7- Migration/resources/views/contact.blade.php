{{-- @include('layout.header',['title'=>'Data Dosen']) --}}
@extends('layout.master')
@section('title','contact')
    @section('content')
       <div class="container">
         <div class="fs-1 text-center fw-bold my-3 ">Contact Us</div>
         <div class="row">
           <div class="col-6">
             <h1>Get In Touch</h1>
             <h3>Number</h3>
             <img src="{{asset('img/Calling.png')}}" alt="phone"><p class="d-inline fs-5">
              General inquiries (123) 456 7890
             </p>
             <h1 class="mt-4">Email</h1>
             <img src="{{asset('img/chat.png')}}" alt="chat"><p class="d-inline fs-5">
              info@Examples.com
             </p>
           </div>
           <div class="col-6">
            <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" class="">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nomor Telepon</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" class="">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div> 
              <div class="mb-3">
              <label for="floatingTextarea2">Message</label>
              <textarea class="form-control" placeholder="Massage" id="floatingTextarea2" style="height: 100px"></textarea>
              </div>
              
 
              <button type="button" class="btn btn-outline-primary rounded-pill d-block mt-4 fw-bold" style="width: 10rem">Submit</button>
            </form>
           </div>
         </div>
       </div>
    @endsection

{{-- @include('layout.footer') --}}