<!DOCTYPE html>
<html>
<head>
    <title>TABEL MAHASISWA - PROGRAM CRUD </title>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- CSS External -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <!--Supaya content fit 100% ke layar, maka menggunakan class containe -->
    <div class="container">
        <h2> Tabel Mahasiswa </h2>
        <!-- tombol tambah -->
        <a href="/tambah-mahasiswa" class="btn btn-outline-primary"> +Tambah </a>
        <!-- tabel mahasiswa dengan pola warna strip -->
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col"> No </th>
                        <th scope="col"> NIM </th>
                        <th scope="col"> Nama Lengkap </th>
                        <th scope="col"> Prodi </th>
                        <th scope="col"> Jurusan </th>
                        <th scope="col"> Angkatan </th>
                        <th scope="col"> Alamat </th>
                    </tr>
                </thead>
            </table>
            <!-- konten tabel -->
            <tbody>
                <!-- nomor dimulai dari 1 -->
                @php
                    $no = 1
                @endphp

                    @foreach ($data as $index => $row )
                    <tr>
                        <th scope="row"> {{$index + $data->firstitem()}}</th>
                        <td> {{ $row->nim }} </td>
                        <td> {{ $row->nama_MHS }} </td>
                        <td> {{ $row->prodi }} </td>
                        <td> {{ $row->jurusan }} </td>
                        <td> {{ $row->angkatan }} </td>
                        <td> {{ $row->alamat }} </td>
                        <td>
                            <a href="#" type="button" class="btn btn-succes"> Edit </a>
                            <a href="#" type="button" class="btn btn-danger"> Hapus </a> 
                        </td>                       
                    @endforeach

        </div>
    </div>
</body>
</html>
