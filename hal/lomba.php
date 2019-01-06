    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Lomba</h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item">
          <a href="">Kegiatan</a>
        </li>
        <li class="breadcrumb-item active">Lomba</li>
      </ol>

      <div class="row">
        <?php
          $sql = $conn->prepare("SELECT * FROM kegiatan WHERE kategori='Lomba'");
          $sql->execute();
          for($i=0;$row=$sql->fetch();$i++){
        ?>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="admin/images/<?php echo $row['img_keg']; ?>" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#"><?php echo $row['judul_keg']; ?></a>
              </h4>
              <h6 class="card-subtitle mb-2 text-muted">Tanggal : <?php echo $row['tgl_keg']; ?></h6>
              <p class="card-text">
                <?php if(strlen($row['ket_keg']) > 50){
                  echo substr($row['ket_keg'], 0, 50)."....";
                }else{
                  echo $row['ket_keg'];
                } ?> 
              </p>
              <a href="<?php echo 'index.php?hal=detail&&judul='.$row['judul_keg']; ?>" class="btn btn-primary">Read More &rarr;</a>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
      <!-- /.row -->
    </div>
