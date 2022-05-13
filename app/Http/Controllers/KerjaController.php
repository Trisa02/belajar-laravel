<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KerjaController extends Controller
{
    //method untuk menampilkan data yang telah diinputkan pada form
    public function input(){
        return view('Validate.input');
    }
    public function proses(Request $request){
        $this->validate($request,[
            'nama'=>'required|min:5|max:20',
            'pekerjaan'=>'required',
            'usia'=>'required|numeric'
        ]);
        return view('Validate.proses',['data'=>$request]);
    }
}
