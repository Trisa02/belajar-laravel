<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //Method untuk function index

    // public function index(){
    //     return "Ini Merupakan adalah method index pada DosenController";
    // }

    //Belajar passing data pada laravel
    //Memanggil data view pada controller
    // public function index(){
    //     return view('biodata');
    // }

    //Passing data dari Controller ke view
    public function index(){
        $nama = "Trisa Sarifatul Anisak"; //=>Pemanggilan data dari Controller dan menampilkannya ke view
        $pelajaran =["Algoritma Pemprograman","Website Dinamis","Android Studio"];
        return view('biodata',['nama'=>$nama,'matkul'=>$pelajaran]);
    }
}
