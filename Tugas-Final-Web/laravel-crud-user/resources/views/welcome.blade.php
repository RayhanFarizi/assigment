@extends('layout.admin')
@section('content')
<div class="body">
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="img">
        </div>
        <br><br>
        <p>Mahasiswa Dari <strong>Makassar, Indonesia</strong></p>
        <p>halo dan selamat datang di halaman admin panel saya. saya adalah seorang pelajar mahasiswa dari
        universitas hasanuddin yang sedang belajar tentang Web Programing.</p>
        <p>pada kesempatan kali ini saya sedang belajar membuat C.R.U.D dengan laravel</p>
        <p>Nama Lengkap : Muhammad Rayhan Farizi</p>
        <p>Nim : H071201052</p>
        <p>Prodi : Sistem Informasi</p>
        <p>Tempat dan Tanggal Lahir : Watansoppeng 27/06/2001</p> 
        <p>nomor Hp : 08218910269</p>
    <!-- /.content -->
    <style>
        .body {
            background-image: url("https://wallpaperaccess.com/full/1320593.jpg");
            background-size: cover;
            text-align: center;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            
        }
        .content-wrapper {
            width: 1286px;
            height: 600px;
            background: rgba(0,0,0,0.7);
            margin: 0 auto;
        }
        .img {
            background-image: url("{{asset('template/dist/img/foto.jpg')}}");
            background-size: cover;
            border-radius: 200px;
            width: 150px;
            height: 150px;
            margin: 0 auto;
            } 
    </style>
  </div>
</div>
@endsection