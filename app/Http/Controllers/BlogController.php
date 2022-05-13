<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function home(){
        return view('template.home');
    }

    public function tentang(){
        return view('template.tentang');
    }

    public function kontak(){
        return view('template.kontak');
    }
}
