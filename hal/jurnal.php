    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Jurnal
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item">
          <a href="">Download</a>
        </li>
        <li class="breadcrumb-item active">Jurnal</li>
      </ol>
      <!-- Marketing dl -->
      <div class="row">
<?php
  $sql = $conn->prepare("SELECT * FROM daftardl WHERE kategori='Jurnal'");
  $sql->execute();
  for($i=0; $row = $sql->fetch();$i++){
?>        
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href=""><img class="card-img-top" src="admin/images/<?php echo $row['img_dl']; ?>" alt=""></a>
            <div class="card-body">
              <h4 class="card-title text-center">
                <a href="" class="text-dark"><?php echo $row['judul_dl'] ?></a>
              </h4>
              <p class="card-text">
                <?php if(strlen($row['ket_dl']) > 50){
                  echo substr($row['ket_dl'], 0, 50)."....";
                }else{
                  echo $row['ket_dl'];
                } ?> 
              </p>
            </div>
            <div class="card-footer">
              <a href="<?php echo $row['link']; ?>" class="btn btn-success fa fa-download" target="_blank">
                <i class="">Unduh</i>
              </a>
              <a href="<?php echo 'index.php?hal=detail&&judul='.$row['judul_dl']; ?>" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
<?php } ?>

    </div>
  </div>
  <!-- /.container -->
