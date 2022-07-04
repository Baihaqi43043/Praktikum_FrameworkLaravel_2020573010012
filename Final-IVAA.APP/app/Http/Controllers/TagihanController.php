<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagihanController extends Controller
{
    public function tagihan()
    {
        return view('tagihan.index');
    }
}
