<!-- Menghubungkan dengan view template master -->
@extends('template.master')
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman','Halaman Kontak')
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->

@section('konten')
    <p>Ini Adalah Halaman Kontak</p>
    <div class="container">
        <h2>Kontak</h2>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Firstname</th>
              <th>Lastname</th>
              <th>Email</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Trisa</td>
              <td>Sarifatul Anisak</td>
              <td>trisasarifatulanisa@gmail.com</td>
            </tr>
          </tbody>
        </table>
      </div>
@endsection
