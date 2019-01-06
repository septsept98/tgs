<!-- Page Content -->
    <div class="container">
      <?php
        $judul = $_GET['judul'];

        $query = $conn->prepare("SELECT * FROM bidang_kajian WHERE judul_kaj='$judul'");
        $query->execute();
        if($query->rowCount() > 0 ){
          $tampil = $query->fetch();
      ?>
      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Bidang Kajian
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Bidang Kajian</li>
      </ol>

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-12">
          <h3 class="col-lg-4 mb-3"><?php echo $tampil['judul_kaj']; ?></h3>
          <!-- Preview Image -->
          <img class="img-fluid rounded" src="" alt="">

          <hr>

          <!-- Date/Time -->
          <p>Posted on January 1, 2017 at 12:00 PM</p>

          <hr>

          <!-- Post Content -->
          <p class="lead">
            <?php echo $tampil['ket_kaj'] ?>
          </p>
        </div>

      </div>
      <!-- /.row -->
      <?php }
        $query = $conn->prepare("SELECT * FROM berita b, kategori k WHERE b.id_kategori=k.id_kategori AND judul_berita='$judul'");
        $query->execute();
        if($query->rowCount() > 0 ){
          $tampil = $query->fetch();
      ?>
      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Berita
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item">
          <a href="index.php?hal=berita">Berita</a>
        </li>
        <li class="breadcrumb-item active"><?php echo $tampil['nama_kategori']; ?>
        </li>
      </ol>
      <br>
      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-12">
          <h3 class="col-lg-12"><?php echo $tampil['judul_berita']; ?></h3><br>
          <!-- Preview Image -->
          <img class="img-fluid rounded" src="admin/images/<?php echo $tampil['img_berita']; ?>" alt="">

          <hr>

          <!-- Date/Time -->
          <p>Posted on <?php echo $tampil['tgl_berita']; ?> by <a href=""><?php echo $tampil['penulis']; ?></a></p>

          <hr>

          <!-- Post Content -->
          <p class="lead">
            <?php echo $tampil['ket_berita'] ?>
          </p>
        </div>

      </div>
      <!-- /.row -->
      <?php } 
        $query = $conn->prepare("SELECT * FROM daftardl WHERE judul_dl='$judul'");
        $query->execute();
        if($query->rowCount() > 0 ){
          $tampil = $query->fetch();
      ?>
      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Download
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item">
          <a href="">Download</a>
        </li>
        <li class="breadcrumb-item active"><?php echo $tampil['kategori']; ?>
        </li>
      </ol>
      <br>
      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-12">
          <h3 class="col-lg-12"><?php echo $tampil['judul_dl']; ?></h3><br>
          <!-- Preview Image -->
          <img class="img-fluid rounded" src="admin/images/<?php echo $tampil['img_dl']; ?>" alt="">
          <br><br>
              <a href="<?php echo $row['link']; ?>" class="btn btn-success fa fa-download" target="_blank">
                <i class="">Unduh <?php echo $tampil['kategori']; ?></i>
              </a>

<!--           <hr>

          Date/Time
          <p>Posted on <?php echo $tampil['tgl_dl']; ?> by <a href=""><?php echo $tampil['penulis']; ?></a></p>

          <hr> -->

          <!-- Post Content -->
          <p class="lead">
            <?php echo $tampil['ket_dl'] ?>
          </p>
        </div>

      </div>
      <!-- /.row -->
      <?php } 
        $query = $conn->prepare("SELECT * FROM materi WHERE judul_materi='$judul'");
        $query->execute();
        if($query->rowCount() > 0 ){
          $tampil = $query->fetch();
      ?>
      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Materi
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Materi
        </li>
      </ol>
      <br>
      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-12">
          <h3 class="col-lg-12"><?php echo $tampil['judul_materi']; ?></h3><br>
          <!-- Preview Image -->
          <img class="img-fluid rounded" src="admin/images/<?php echo $tampil['img_materi']; ?>" alt="">

<!--           <hr>

          Date/Time 
          <p>Posted on <?php echo $tampil['tgl_materi']; ?> by <a href=""><?php echo $tampil['penulis']; ?></a></p>

          <hr> -->

          <!-- Post Content -->
          <p class="lead">
            <?php echo $tampil['ket_materi'] ?>
          </p>
        </div>

      </div>
      <!-- /.row -->
      <?php } 
        $query = $conn->prepare("SELECT * FROM kegiatan WHERE judul_keg='$judul'");
        $query->execute();
        if($query->rowCount() > 0 ){
          $tampil = $query->fetch();
      ?>
      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3"><?php echo $tampil['kategori']; ?>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">
          <a href="">Kegiatan</a>
        </li>
        <li class="breadcrumb-item active"><?php echo $tampil['kategori']; ?>
        </li>
      </ol>
      <br>
      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-12">
          <h3 class="col-lg-12"><?php echo $tampil['judul_keg']; ?></h3><br>
          <!-- Preview Image -->
          <img class="img-fluid rounded" src="admin/images/<?php echo $tampil['img_keg']; ?>" alt="">

          <hr>

          <!-- Date/Time  -->
          <p>Posted on <?php echo $tampil['tgl_keg']; ?></p>

          <hr>

          <!-- Post Content -->
          <p class="lead">
            <?php echo $tampil['ket_keg'] ?>
          </p>
        </div>

      </div>
      <!-- /.row -->
      <?php }  
        $query = $conn->prepare("SELECT * FROM topik WHERE judul_topik='$judul'");
        $query->execute();
        if($query->rowCount() > 0 ){
          $tampil = $query->fetch();
      ?>
      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Topik
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">
          <a href="">Penelitian</a>
        </li>
        <li class="breadcrumb-item active">Topik
        </li>
      </ol>
      <br>
      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-12">
          <h3 class="col-lg-12"><?php echo $tampil['judul_topik']; ?></h3><br>
          <!-- Preview Image -->
          <img class="img-fluid rounded" src="admin/images/<?php echo $tampil['img_topik']; ?>" alt="">

          <hr>

          <!-- Date/Time  -->
          <p>Posted on <?php echo $tampil['tgl_topik']; ?></p>

          <hr>

          <!-- Post Content -->
          <p class="lead">
            <?php echo $tampil['ket_topik'] ?>
          </p>
        </div>

      </div>
      <!-- /.row -->
      <?php }   
        $query = $conn->prepare("SELECT * FROM publikasi WHERE judul_pub='$judul'");
        $query->execute();
        if($query->rowCount() > 0 ){
          $tampil = $query->fetch();
      ?>
      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Publikasi
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">
          <a href="">Penelitian</a>
        </li>
        <li class="breadcrumb-item active">Publikasi
        </li>
      </ol>
      <br>
      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-12">
          <h3 class="col-lg-12"><?php echo $tampil['judul_pub']; ?></h3><br>
          <!-- Preview Image -->
          <img class="img-fluid rounded" src="admin/images/<?php echo $tampil['img_pub']; ?>" alt="">

          <hr>

          <!-- Date/Time  -->
          <p>Posted on <?php echo $tampil['tgl_pub']; ?></p>

          <hr>

          <!-- Post Content -->
          <p class="lead">
            <?php echo $tampil['ket_pub'] ?>
          </p>
        </div>

      </div>
      <!-- /.row -->
      <?php } 
      ?>


    </div>
    <!-- /.container --><br>