    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Jurnal
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item">
          <a href="">Download</a>
        </li>
        <li class="breadcrumb-item active">Jurnal</li>
      </ol>
<?php
  $sql = $conn->prepare("SELECT * FROM daftardl WHERE kategori='Jurnal'");
  $sql->execute();
  for($i=0; $row = $sql->fetch();$i++){
?>
      <!-- Blog Post -->
      <div class="card mb-4">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <a href="#">
                <img class="img-fluid rounded" src="admin/images/file/<?php echo $row['img_dl']; ?>" alt="">
              </a>
            </div>
            <div class="col-lg-6">
              <h2 class="card-title"><?php echo $row['judul_dl']; ?></h2>
              <p class="card-text">
                <?php if(strlen($row['ket_dl']) > 50){
                  echo substr($row['ket_dl'], 0, 50)."....";
                }else{
                  echo $row['ket_dl'];
                } ?> 
              </p>
              <a href="#" class="btn btn-success"><?php echo $row['file_dl']; ?></a>
              <a href="#" class="btn btn-primary">Read More &rarr;</a>
            </div>
          </div>
        </div>
      </div>
<?php } ?>

    </div>
  <!-- /.container -->
