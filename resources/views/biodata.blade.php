<!DOCTYPE html>
<html>
    <head>
        <title>Bioadta</title>
    </head>
    <body>
        <h1>Biodata</h1>
        <p>Nama : {{$nama}}</p>
        <p>Tempat Tanggal Lahir : Bonjol 02 Oktober 2000</p>
        <p>Alamat : Kecamatan Bonjol, Kabupaten Pasaman, Sumatra Barat</p>
        <p>Mata Pelajaran</p>
        <ul>
            @foreach ($matkul as $matakuliah)
                <li>{{$matakuliah}}</li>
            @endforeach
        </ul>
    </body>
</html>
