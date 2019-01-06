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
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownkeg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
      if($hal=='beranda'){
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
        include "search.php";
      }
    ?>
    <div class="container">

      <h1 class="my-4 mb-3">Search</h1>      

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Search</li>
      </ol>

      <!-- Marketing Berita -->
      <div class="row">
        <?php
          $cari = $_GET['keyword'];
          $min_length = 3;
          if(strlen($cari)>=$min_length){
            $cari = $_GET['keyword'];
            $query = $conn->prepare("SELECT * FROM alumni WHERE nm_alumni LIKE :cari OR alamat LIKE :cari OR email LIKE :cari");
            $query->bindValue(':cari', '%'.$cari.'%', PDO::PARAM_STR);
            $query->execute();
            if($query->rowCount() > 0){
              $kosong = 1;
              ?><h3 class="col-lg-4 mb-3">Alumni</h3> <?php   
                for($i = 0;$tampil = $query->fetch() ; $i++){
              ?>
              <div class="col-lg-12 mb-4">
                <div class="card h-100 text-center">
                  <div class="card-body">
                    <h4 class="card-title"><?php echo $tampil['nm_alumni']; ?></h4>
                    <h6 class="card-subtitle mb-2 text-muted">Alamat</h6>
                    <p class="card-text"><?php echo $tampil['alamat']; ?></p>
                  </div>
                  <div class="card-footer">
                    <a href="#"><?php echo $tampil['email']; ?></a>
                  </div>
                </div>
              </div> 
            <?php
                }
            }
            $query = $conn->prepare("SELECT * FROM dosen WHERE nm_dosen LIKE :cari OR alamat LIKE :cari OR email LIKE :cari");
            $query->bindValue(':cari', '%'.$cari.'%', PDO::PARAM_STR);
            $query->execute();
            if($query->rowCount() > 0){
              $kosong = 1;
              ?><h3 class="col-lg-12 mb-3">Dosen</h3><?php   
                for($i = 0;$tampil = $query->fetch() ; $i++){
              ?>
              <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                  <div class="card-body">
                    <h4 class="card-title"><?php echo $tampil['nm_dosen']; ?></h4>
                    <h6 class="card-subtitle mb-2 text-muted">Alamat</h6>
                    <p class="card-text"><?php echo $tampil['alamat']; ?></p>
                  </div>
                  <div class="card-footer">
                    <a href="#"><?php echo $tampil['email']; ?></a>
                  </div>
                </div>
              </div> 
            <?php
                }
            }
            $query = $conn->prepare("SELECT * FROM mahasiswa WHERE nm_mhs LIKE :cari OR nim LIKE :cari OR alamat LIKE :cari OR email LIKE :cari");
            $query->bindValue(':cari', '%'.$cari.'%', PDO::PARAM_STR);
            $query->execute();
            if($query->rowCount() > 0){
              $kosong = 1;
              ?><h3 class="col-lg-12 mb-3">Mahasiswa</h3><?php  
                for($i = 0;$tampil = $query->fetch() ; $i++){
              ?>
              <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                  <div class="card-body">
                    <h4 class="card-title"><?php echo $tampil['nm_mhs']; ?></h4>
                    <h5 class="card-title"><?php echo $tampil['nim']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Alamat</h6>
                    <p class="card-text"><?php echo $tampil['alamat']; ?></p>
                  </div>
                  <div class="card-footer">
                    <a href="#"><?php echo $tampil['email']; ?></a>
                  </div>
                </div>
              </div>  
            <?php
                }
            }
            $query = $conn->prepare("SELECT * FROM berita WHERE judul_berita LIKE :cari OR penulis LIKE :cari OR ket_berita LIKE :cari OR tgl_berita LIKE :cari");
            $query->bindValue(':cari', '%'.$cari.'%', PDO::PARAM_STR);
            $query->execute();
            if($query->rowCount() > 0){
              $kosong = 1;
              ?><h3 class="col-lg-12 mb-3">Berita</h3><?php  
                for($i = 0;$tampil = $query->fetch() ; $i++){
              ?>
              <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                  <a href=""><img class="card-img-top" src="admin/images/<?php echo $tampil['img_berita']; ?>" alt=""></a>
                  <div class="card-body">
                    <h4 class="card-title text-center">
                      <a href="" class="text-dark"><?php echo $tampil['judul_berita'] ?></a>
                    </h4>
                    <a href="<?php echo 'index.php?hal=detail&&judul='.$tampil['judul_berita']; ?>" class="btn btn-primary">Learn More</a>
                  </div>
                  <div class="card-footer">
                    Posted on <?php echo $tampil['tgl_berita']; ?> by
                    <a href="#"><?php echo $tampil['penulis']; ?></a>
                  </div>
                </div>
              </div>
            <?php
                }
            }
            $query = $conn->prepare("SELECT * FROM bidang_kajian WHERE judul_kaj LIKE :cari OR ket_kaj LIKE :cari");
            $query->bindValue(':cari', '%'.$cari.'%', PDO::PARAM_STR);
            $query->execute();
            if($query->rowCount() > 0){
              $kosong = 1;
              ?><h3 class="col-lg-12 mb-3">Bidang Kajian</h3><?php  
                for($i = 0;$tampil = $query->fetch() ; $i++){
              ?>
              <div class="col-lg-4 mb-4">
                <div class="card h-100">
                  <h4 class="card-header"><?php echo $tampil['judul_kaj']; ?></h4>
                  <div class="card-body">
                    <p class="card-text">                
                      <?php 
                        echo $tampil['ket_kaj'];
                      ?> 
                    </p>
                  </div>
                </div>
              </div>
            <?php
                }
            }
            $query = $conn->prepare("SELECT * FROM daftardl WHERE judul_dl LIKE :cari OR kategori LIKE :cari OR ket_dl LIKE :cari");
            $query->bindValue(':cari', '%'.$cari.'%', PDO::PARAM_STR);
            $query->execute();
            if($query->rowCount() > 0){
              $kosong = 1;
              ?><h3 class="col-lg-12 mb-3">Download</h3><?php  
                for($i = 0;$tampil = $query->fetch() ; $i++){
              ?>
              <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                  <a href=""><img class="card-img-top" src="admin/images/<?php echo $tampil['img_dl']; ?>" alt=""></a>
                  <div class="card-body">
                    <h4 class="card-title text-center">
                      <a href="" class="text-dark"><?php echo $tampil['judul_dl'] ?></a>
                    </h4>
                  </div>
                  <div class="card-footer">
                      <a href="<?php echo $row['link']; ?>" class="btn btn-success fa fa-download" target="_blank">
                        <i class="">Unduh</i>
                      </a>
                    <a href="<?php echo 'index.php?hal=detail&&judul='.$row['judul_dl']; ?>" class="btn btn-primary">Learn More</a>
                  </div>
                </div>
              </div>
            <?php
                }
            }
            $query = $conn->prepare("SELECT * FROM kegiatan WHERE judul_keg LIKE :cari OR ket_keg LIKE :cari");
            $query->bindValue(':cari', '%'.$cari.'%', PDO::PARAM_STR);
            $query->execute();
            if($query->rowCount() > 0){
              $kosong = 1;
              ?><h3 class="col-lg-12 mb-3">Kegiatan</h3><?php  
                for($i = 0;$tampil = $query->fetch() ; $i++){
              ?>
              <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                  <a href="#"><img class="card-img-top" src="admin/images/<?php echo $tampil['img_keg']; ?>" alt=""></a>
                  <div class="card-body">
                    <h4 class="card-title">
                      <a href="#"><?php echo $tampil['judul_keg']; ?></a>
                    </h4>
                    <h6 class="card-subtitle mb-2 text-muted">Tanggal : <?php echo $tampil['tgl_keg']; ?></h6>
                    <a href="<?php echo 'index.php?hal=detail&&judul='.$tampil['judul_keg']; ?>" class="btn btn-primary">Read More &rarr;</a>
                  </div>
                </div>
              </div>
            <?php
                }
            }
            $query = $conn->prepare("SELECT * FROM materi WHERE judul_materi LIKE :cari OR ket_materi LIKE :cari");
            $query->bindValue(':cari', '%'.$cari.'%', PDO::PARAM_STR);
            $query->execute();
            if($query->rowCount() > 0){
              $kosong = 1;
              ?><h3 class="col-lg-12 mb-3">Materi</h3><?php  
                for($i = 0;$tampil = $query->fetch() ; $i++){
              ?>
              <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                  <a href="#"><img class="card-img-top" src="admin/images/<?php echo $tampil['img_materi']; ?>" alt=""></a>
                  <div class="card-body">
                    <h4 class="card-title">
                      <a href="#"><?php echo $tampil['judul_materi']; ?></a>
                    </h4>
                    <h6 class="card-subtitle mb-2 text-muted">Tanggal : <?php echo $tampil['tgl_materi']; ?></h6>
                    <a href="<?php echo 'index.php?hal=detail&&judul='.$tampil['judul_materi']; ?>" class="btn btn-primary">Read More &rarr;</a>
                  </div>
                </div>
              </div>
            <?php
                }
            }
            $query = $conn->prepare("SELECT * FROM publikasi WHERE judul_pub LIKE :cari OR ket_pub LIKE :cari");
            $query->bindValue(':cari', '%'.$cari.'%', PDO::PARAM_STR);
            $query->execute();
            if($query->rowCount() > 0){
              $kosong = 1;
              ?><h3 class="col-lg-12 mb-3">Publikasi</h3><?php  
                for($i = 0;$tampil = $query->fetch() ; $i++){
              ?>
              <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                  <a href="#"><img class="card-img-top" src="admin/images/<?php echo $tampil['img_pub']; ?>" alt=""></a>
                  <div class="card-body">
                    <h4 class="card-title">
                      <a href="#"><?php echo $tampil['judul_pub']; ?></a>
                    </h4>
                    <h6 class="card-subtitle mb-2 text-muted">Tanggal : <?php echo $tampil['tgl_pub']; ?></h6>
                    <a href="<?php echo 'index.php?hal=detail&&judul='.$tampil['judul_pub']; ?>" class="btn btn-primary">Read More &rarr;</a>
                  </div>
                </div>
              </div>
            <?php
                }
            }
            $query = $conn->prepare("SELECT * FROM topik WHERE judul_topik LIKE :cari OR ket_topik LIKE :cari");
            $query->bindValue(':cari', '%'.$cari.'%', PDO::PARAM_STR);
            $query->execute();
            if($query->rowCount() > 0){
              $kosong = 1;
              ?><h3 class="col-lg-12 mb-3">Topik</h3><?php  
                for($i = 0;$tampil = $query->fetch() ; $i++){
              ?>
              <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                  <a href="#"><img class="card-img-top" src="admin/images/<?php echo $tampil['img_topik']; ?>" alt=""></a>
                  <div class="card-body">
                    <h4 class="card-title">
                      <a href="#"><?php echo $tampil['judul_topik']; ?></a>
                    </h4>
                    <h6 class="card-subtitle mb-2 text-muted">Tanggal : <?php echo $tampil['tgl_topik']; ?></h6>
                    <a href="<?php echo 'index.php?hal=detail&&judul='.$tampil['judul_topik']; ?>" class="btn btn-primary">Read More &rarr;</a>
                  </div>
                </div>
              </div>
            <?php
                }
            }
            if($kosong != 1){
              ?>
              <div class="col-lg-4 mb-4">
                  <h4>Tidak Ketemu</h4>
              </div> 
              <?php
            }
          }else{
            ?>
              <div class="col-lg-8 mb-4">
                  <h4>Masukkan Keyword lebih dari 3</h4>
              </div> 
              <?php
          }
        ?>
      </div>
    </div>
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
