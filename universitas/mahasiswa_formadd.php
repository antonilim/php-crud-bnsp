<!doctype html>
<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Universitas</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Tabel Mahasiswa</a>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<h1 h1 style="text-align:center">Tambah Mahasiswa</h1>
<div class="container">
    <form method="post" name="theform" action="mahasiswa_prosesadd.php" class="form-horizontal" onsubmit="return valid(this);" enctype="multipart/form-data">
    <div class="mb-8">
        <div class="col col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">NIM</label>
            <input type="text" class="form-control" name="nim" placeholder="Input NIM" required>
        </div>

        <div class="col col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="Input Nama Lengkap" required>
        </div>

        <div class="col col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">Tgl. Lahir</label>
            <input type="date" class="form-control" name="tgl_lahir" placeholder="Input Tanggal Lahir" required>
        </div>

        <div class="col col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">No Telpon</label>
            <input type="text" class="form-control" name="no_tlp" placeholder="Input No Telpon" required>
        </div>

        <div class="col col-lg-4">
        <label for="exampleFormControlInput1" class="form-label">Prodi</label>
        <select class="form-select" name="prodi" aria-label="Default select example" required>
            <option selected disabled>Pilih Prodi</option>
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Teknik Perangkat Lunak">Teknik Perangkat Lunak</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
        </select>
        </div>
        <br>
        <div class="col col-lg-4">
            <button class="btn btn-primary" type="submit">Simpan</button>
            <a href="index.php" class="btn btn-outline-primary">Batal</a>
        </div>
    </div>
    </form>
    </div>
  </body>

