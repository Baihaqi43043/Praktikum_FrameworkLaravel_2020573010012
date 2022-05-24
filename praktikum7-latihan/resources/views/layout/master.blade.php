<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset("style.css")}}">
    
    <title>@yield('title')</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light atas">
      <div class="container-fluid kanan">
        <a class="navbar-brand logo" href="#"><img src="{{asset('img/logo.png')}}" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link fw-bold @yield('menuHome') mt-2" aria-current="page" href="home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold @yield('menuAbout') mt-2" href="about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold @yield('menuPortofolio') mt-2" href="portofolio">Portofolio</a>
            </li>
            <li class="nav-item">
             
              <a class="nav-link  @yield('menuContact')" href="contact" > <button type="button" class="btn btn-outline-primary rounded-pill fw-bold" >Contact Us</button></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
      @yield('content')
      <footer class="bg-light py-4 mt-2">
        <div class="container">
           <div class="row ">
            <div class="col-4 fs-2 fw-bolder">Ivaa team.
               <p class="fs-6 fw-bolder " style="color: #868484">Lorem ipsum dolor sit amet, 
             <br> consectetur adipiscing elit. </p>
           </div>
           <div class="col-4 fs-2 fw-bolder">About Us
            <p class="fs-6 fw-bolder " style="color: #868484">Lorem ipsum dolor sit amet, 
          <br> consectetur adipiscing elit. </p>
        </div>
        <div class="col-4 fs-2 fw-bolder">Get In Touch.
          <p class="fs-6 fw-bolder " style="color: #868484">Lorem ipsum dolor sit amet, 
        <br> consectetur adipiscing elit. </p>
        <div>
          <a href="#"><img class="fimg" src="{{asset('img/Instagram.png')}}" alt=""></a>
          <a href="#"><img class="fimg" src="{{asset('img/Facebook.png')}}" alt=""></a>
          <a href="#"><img class="fimg" src="{{asset('img/YouTube.png')}}" alt=""></a>
        </div>
      </div>
            </div>
        </div>
    </footer>
    
    
    <!-- Optional JavaScript; choose one of the two! -->
   
       <!-- Option 1: Bootstrap Bundle with Popper -->
       <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
       <!-- Option 2: Separate Popper and Bootstrap JS -->
       <!--
       <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
       -->
     </body>
   </html>