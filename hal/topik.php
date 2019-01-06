    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Topik Research
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item">
          <a href="">Penelitian</a>
        </li>
        <li class="breadcrumb-item active">Topik Research</li>
      </ol>
<?php
  $sql = $conn->prepare("SELECT * FROM topik");
  $sql->execute();
  for($i=0; $row = $sql->fetch();$i++){
?>
      <!-- Blog Post -->
      <div class="card mb-4">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <a href="#">
                <img class="img-fluid rounded" src="admin/images/<?php echo $row['img_topik']; ?>" alt="">
              </a>
            </div>
            <div class="col-lg-6">
              <h2 class="card-title"><?php echo $row['judul_topik']; ?></h2>
              <p class="card-text">
                <?php if(strlen($row['ket_topik']) > 50){
                  echo substr($row['ket_topik'], 0, 50)."....";
                }else{
                  echo $row['ket_topik'];
                } ?> 
              </p>
              <a href="#" class="btn btn-primary">Read More &rarr;</a>
            </div>
          </div>
        </div>
        <div class="card-footer text-muted">
          Posted on <?php echo $row['tgl_topik']; ?>
        </div>
      </div>
<?php } ?>

    </div>
  <!-- /.container -->
