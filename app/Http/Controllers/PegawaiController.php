<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    //untuk menangkap data yang dikirim dari route yang telah kita buat tadi ,maka pada method index
    //kita buat sebuah variabel nama kemudian data akan diolah dengan me return variabel nama tersebut
    public function index($nama){
        return $nama;
    }
    //menampilkan page formulir
    public function formulir(){
        return view ('formulir');
    }

    //method proses digunakan untuk meproses data yang dikirim dari form
    public function proses(Request $request){
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        return "Nama : ".$nama. ", Alamat : ".$alamat;

    }
}
