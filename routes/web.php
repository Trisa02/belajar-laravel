<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\KerjaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Membuat Route baru pada projek belajar laravel
Route::get('hallo',function(){
    return "Hallo Trisa Sarifatul Anisak";
});
//Membuat Route blog pada projek belajar laravel,dimana untuk memanggil atau menampilkan view blog.blade.php
// Route::get('blog',function(){
//     return view('blog');
// });

//Pemanggilan method index pada DosenController
Route::get('dosen',[DosenController::class,'index'])->name('index');

//Menangkap data melalui url =>ketikan urlnya kemudian akan tampil data sesuai dengan url yang diketikan
//parameter pertama yaitu pegawai dan parameter kedua dengan syntax nama yang digunakan untuk menangkap data
Route::get('pegawai/{nama}',[PegawaiController::class,'index'])->name('index');

//Menangkap data melalui inputan
//Route formulir digunakan untuk menjalankan method formulir pada PegawaiController
Route::get('formulir',[PegawaiController::class,'formulir'])->name('formulir');
//method post digunakan untuk menangkap data post dari form
Route::post('formulir/proses',[PegawaiController::class,'proses'])->name('proses');

//membuat template dinamis menggunakan template .blade.php
Route::get('blog',[BlogController::class,'home'])->name('blog'); //untuk menampilkan halaman blog
Route::get('blog/tentang',[BlogController::class,'tentang'])->name('tentang'); //untuk menampilkan halaman tentang yang mana data
//diambil dari method tentang pada BlogController
Route::get('blog/kontak',[BlogController::class,'kontak'])->name('kontak');  //untuk menampilkan halaman kontak yang mana data
//diambil dari method kontak pada BlogController

//Menampilkan data dari tabel pada database
Route::get('karyawan',[KaryawanController::class,'index'])->name('karyawan');
//Membuat pencarian data pada laravel
Route::get('karyawan/cari',[KaryawanController::class,'cari'])->name('cari');
//Menginputkan data karyawan melalui form
Route::get('karyawan/tambah',[KaryawanController::class,'tambah'])->name('tambah');
//Memproses data karyawan yang telah diinputkan pada form dengan menggunakan method post
Route::post('karyawan/proses',[KaryawanController::class,'proses'])->name('proses');
//Menampilkan edit data karyawan
Route::get('karyawan/edit/{id}',[KaryawanController::class,'edit'])->name('edit');
//Memproses data karyawan yang telah di update
Route::post('karyawan/update',[KaryawanController::class,'update'])->name('update');
//Hapus data karyawan
Route::get('karyawan/hapus/{id}',[KaryawanController::class,'hapus'])->name('hapus');
//Menginputkan data pada form
Route::get('input',[KerjaController::class,'input'])->name('input');
//Memproses data yang telah diinputkan pada form
Route::post('input/proses',[KerjaController::class,'proses'])->name('proses');
