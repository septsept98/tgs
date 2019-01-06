    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Materi
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Materi</li>
      </ol>
      <!-- Marketing dl -->
      <div class="row">
<?php
  $sql = $conn->prepare("SELECT * FROM materi");
  $sql->execute();
  for($i=0; $row = $sql->fetch();$i++){
?>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href=""><img class="card-img-top" src="admin/images/<?php echo $row['img_materi']; ?>" alt=""></a>
            <div class="card-body">
              <h4 class="card-title text-center">
                <a href="" class="text-dark"><?php echo $row['judul_materi'] ?></a>
              </h4>
              <p class="card-text">
                <?php if(strlen($row['ket_materi']) > 50){
                  echo substr($row['ket_materi'], 0, 50)."....";
                }else{
                  echo $row['ket_materi'];
                } ?> 
              </p>
              <a href="<?php echo 'index.php?hal=detail&&judul='.$row['judul_materi']; ?>" class="btn btn-primary">Learn More</a>
            </div>
            <div class="card-footer">
              Posted on <?php echo $row['tgl_materi']; ?> 
            </div>
          </div>
        </div>
<?php } ?>
</div>
    </div>
  <!-- /.container -->
