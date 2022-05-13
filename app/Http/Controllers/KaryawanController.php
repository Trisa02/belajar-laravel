<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KaryawanController extends Controller
{
    //Menampilkan data dari tabel tb_karyawan pada view Karyawan
    public function index(){
        //mengambil data dari tabel pada database
        // $karyawan = DB::table('tb_pegawai')->get();
        //mengirim data karyawan ke view karyawan
        // cara 1
        // return view ('Karyawan.karyawan',[
        //     'karyawan' =>$karyawan
        // ]);
        // cara 2
        $data['karyawan'] = DB::table('tb_pegawai')->simplePaginate(10);
        return view ('Karyawan.karyawan',$data);

        // cara 3
        // $karyawan = DB::table('tb_pegawai')->get();
        // return view ('Karyawan.karyawan',compact('karyawan'));
    }
    //pencarian data pada laravel
    public function cari(Request $request){
        //menangkap data pencarian
        $cari = $request->cari;
        //mengambil data pencarian dari table tb_pegawai
        $data['karyawan'] = DB::table('tb_pegawai')
        ->where('nama_pegawai','like',"%".$cari."%")
        ->paginate();
        //mengirim data pegawai ke view karyawan
        return view('Karyawan.karyawan',$data);
    }
    //Menampilkan form tambah data karyawan
    public function tambah(){
        return view('Karyawan.tambah');
    }
    //Memproses data karyawan yang telah diinputkan pada form karyawan
    public function proses(Request $request){
        //Insert data ke dalam database
        DB::table('tb_pegawai')->insert([
            'nama_pegawai'=>$request->nama,
            'jabatan_pegawai'=>$request->jabatan,
            'umur_pegawai'=>$request->umur,
            'alamat_pegawai'=>$request->alamat
        ]);
        return redirect('/karyawan');
    }

    public function edit($id){
        //Mengambil data berdasarkan id yang dipilih
        $data['karyawan']=DB::table('tb_pegawai')->where('id_pegawai',$id)->get();
        //passing data atau menampilkan data pegawai yang didapatkan
        return view('Karyawan.edit',$data);
    }
    public function update(Request $request){
        DB::table('tb_pegawai')->where('id_pegawai',$request->id)->update([
            'nama_pegawai'=>$request->nama,
            'jabatan_pegawai'=>$request->jabatan,
            'umur_pegawai'=>$request->umur,
            'alamat_pegawai'=>$request->alamat
        ]);
        return redirect('/karyawan');
    }
    public function hapus($id){
        DB::table('tb_pegawai')->where('id_pegawai',$id)->delete();
        return redirect('/karyawan');
    }


}
