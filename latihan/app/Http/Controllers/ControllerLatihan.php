<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerLatihan extends Controller
{
    public function home(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function portofolio(){
        return view('portofolio');
    }
    public function contact(){
        return view('contact');
    }
}
