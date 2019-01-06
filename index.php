<?php
  require_once('koneksi_pdo.php');
  $hal = $_GET['hal'];
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>REKAYASA PERANGKAT LUNAK</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/modern-business.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php?hal=beranda">Laboratorium RPL</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPeneliatian" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Penelitian
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPeneliatian">
                <a class="dropdown-item" href="index.php?hal=topik">Topik Research</a>
                <a class="dropdown-item" href="index.php?hal=publikasi">Publikasi</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAnggota" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Anggota
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownAnggota">
                <a class="dropdown-item" href="index.php?hal=dosen">Dosen</a>
                <a class="dropdown-item" href="index.php?hal=mahasiswa">Mahasiswa</a>
                <a class="dropdown-item" href="index.php?hal=alumni">Alumni</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?hal=informasi">Informasi</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownDload" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Download
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownDload">
                <a class="dropdown-item" href="index.php?hal=jurnal">Jurnal</a>
                <a class="dropdown-item" href="index.php?hal=ebook">E-Books</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?hal=materi">Materi</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownKeg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Kegiatan
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownKeg">
                <a class="dropdown-item" href="index.php?hal=workshop">Workshop</a>
                <a class="dropdown-item" href="index.php?hal=klinik">Klinik</a>
                <a class="dropdown-item" href="index.php?hal=lomba">Lomba</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <?php
      if($hal=='beranda' || $hal==''){
        include "slide.php"; include"konten.php";
      }elseif($hal=='topik'){
        include "hal/topik.php";
      }elseif($hal=='publikasi'){
        include "hal/publikasi.php";
      }elseif($hal=='dosen'){
        include "hal/dosen.php";
      }elseif($hal=='mahasiswa'){
        include "hal/mahasiswa.php";
      }elseif($hal=='alumni'){
        include "hal/alumni.php";
      }elseif($hal=='informasi'){
        include "hal/berita.php";
      }elseif($hal=='jurnal'){
        include "hal/jurnal.php";
      }elseif($hal=='ebook'){
        include "hal/ebook.php";
      }elseif($hal=='materi'){
        include "hal/materi.php";
      }elseif($hal=='workshop'){
        include "hal/workshop.php";
      }elseif($hal=='klinik'){
        include "hal/klinik.php";
      }elseif($hal=='lomba'){
        include "hal/lomba.php";
      }elseif($hal=='kontak'){
        include "hal/kontak.php";
      }elseif($hal=='search'){
        include "hal/search.php";
      }else{
        include "slide.php"; include"konten.php";
      }
    ?>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; ASP 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="assets/jquery.min.js"></script>
    <script src="assets/bootstrap.bundle.min.js"></script>

  </body>

</html>
