<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EregController extends Controller
{
    // Controller halamam home
    public function index()
    {
        return view('home');
    }
    // Controller halamam jenjang pendidikan
    public function jenjang()
    {
        return view('jenjang');
    }
    // Controller halamam form isi data
    public function isidata()
    {
        return view('form');
    }
}
