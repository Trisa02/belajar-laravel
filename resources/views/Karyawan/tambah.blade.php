<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <title>Membuat CRUD database</title>
  </head>
  <body>
      <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-header">
                    <div class="float-left">
                        <B>Tambah Data Pegawai</B>
                    </div>

                  </div>
                  <div class="card-body">
                    <div class="float-left">
                        <a href ="{{route('tambah')}}" class="btn btn-link btn-sm">Kembali</a>
                    </div>
                    <br>
                    <form action="proses" method="post">
                        {{ csrf_field() }} <!-- Merupakan fitur keamana pada laravel yang digunakan untuk mencegah inputan dari luar sistem -->
                        <div class="container">
                            <div class="col-md-6">
                                <label for="nama">Nama Pegawai:</label>
                                <input type="text" name="nama" class="form-control" placeholder="Enter Nama Pegawai" id="nama">
                              </div>
                              <div class="col-md-6">
                                <label for="alamat">Jabatan Pegawai:</label>
                                <input type="text" name="jabatan" class="form-control" placeholder="Enter Jabatan" id="jabatan">
                              </div>
                              <div class="col-md-6">
                                <label for="alamat">Umur Pegawai:</label>
                                <input type="text" name="umur" class="form-control" placeholder="Enter Umur" id="umur">
                              </div>
                              <div class="col-md-6">
                                <label for="alamat">Alamat Pegawai:</label>
                                <textarea name="alamat" id="" cols="30" rows="5" class="form-control"></textarea>
                              </div>
                              <br>
                              <div class="col-md-6">
                                  <button type="submit" value="Submit" class="btn btn-primary">Submit</button>
                              </div>
                        </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>
