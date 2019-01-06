    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Topik Research
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item">
          <a href="">Penelitian</a>
        </li>
        <li class="breadcrumb-item active">Topik Research</li>
      </ol>
      <div class="row">
<?php
  $sql = $conn->prepare("SELECT * FROM topik");
  $sql->execute();
  for($i=0; $row = $sql->fetch();$i++){
?>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href=""><img class="card-img-top" src="admin/images/<?php echo $row['img_topik']; ?>" alt=""></a>
            <div class="card-body">
              <h4 class="card-title text-center">
                <a href="" class="text-dark"><?php echo $row['judul_topik'] ?></a>
              </h4>
              <p class="card-text">
                <?php if(strlen($row['ket_topik']) > 50){
                  echo substr($row['ket_topik'], 0, 50)."....";
                }else{
                  echo $row['ket_topik'];
                } ?> 
              </p>
              <a href="<?php echo 'index.php?hal=detail&&judul='.$row['judul_topik']; ?>" class="btn btn-primary">Learn More</a>
            </div>
            <div class="card-footer">
              Posted on <?php echo $row['tgl_topik']; ?>
            </div>
          </div>
        </div>
<?php } ?>
      </div>
    </div>
  <!-- /.container -->
