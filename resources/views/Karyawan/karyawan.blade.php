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
    <style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style>
      <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-header">
                    <div class="float-left">
                        <B>Data Pegawai</B>
                    </div>
                    <div class="float-right">
                        <a href ="{{route('tambah')}}" class="btn btn-success btn-sm">Tambah Data</a>
                    </div>
                  </div>
                  <div class="card-body">
                      <p>Cari Data Pegawai</p>
                      <form action="{{route('cari')}}" method="GET" class="form-inline">
                        <div class="col-md-2">
                            <input type="text" name="cari" class="form-control" placeholder="Cari Pegawai.." value="{{old('cari')}}">
                        </div>
                        <br>
                        <div class="col-md-6">
                            <button type="submit" value="Submit" class="btn btn-primary ml-3">Submit</button>
                        </div>
                      </form>
                      <br/>
                      <table class="table table-bordered table-sm">
                          <thead>
                              <tr>
                                <th>No</th>
                                <th>Nama Pegawai</th>
                                <th>Jabatan Pegawai</th>
                                <th>Umur Pegawai</th>
                                <th>Alamat Pegawai</th>
                                <th>Aksi</th>
                              </tr>

                          </thead>
                          <tbody>
                              @foreach ($karyawan as $key => $kry)
                              <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$kry->nama_pegawai}}</td>
                                    <td>{{$kry->jabatan_pegawai}}</td>
                                    <td>{{$kry->umur_pegawai}}</td>
                                    <td>{{$kry->alamat_pegawai}}</td>
                                    <td>
                                        <a href="{{route('edit',$kry->id_pegawai)}}" class="btn btn-warning btn-block"><i class="fa fa-edit"></i>Edit</a>
                                        <a href="{{route('hapus',$kry->id_pegawai)}}" class="btn btn-danger btn-block"><i class="fa fa-trash"></i>Hapus</a>
                                    </td>
                                </tr>
                              @endforeach
                          </tbody>
                      </table>
                  </div>
                  <br/>
                      Halaman : {{$karyawan->currentPage()}}<br/>
                      Data Per Halaman : {{$karyawan -> perPage()}}<br/>
                    <br/>
                      {{$karyawan -> links()}}
                    <br/>
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
