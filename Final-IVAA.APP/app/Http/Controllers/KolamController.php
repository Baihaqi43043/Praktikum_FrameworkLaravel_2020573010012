<?php

namespace App\Http\Controllers;

use App\Models\kolam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KolamController extends Controller
{
    public function index()
    {

        $data = DB::table('tampilgabung')->get();
         return view('kolam.index',compact('data'));
    }
}
