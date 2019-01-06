    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Alumni
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item">
          <a href="">Anggota</a>
        </li>
        <li class="breadcrumb-item active">Alumni</li>
      </ol>

      <!-- Team Members -->
      <div class="row">
<?php
  $sql = $conn->prepare("SELECT * FROM alumni");
  $sql->execute();
  for($i=0;$row=$sql->fetch();$i++){
?>
        <div class="col-lg-4 mb-4">
          <div class="card h-100 text-center">
            <div class="card-body">
              <h4 class="card-title"><?php echo $row['nm_alumni']; ?></h4>
              <h6 class="card-subtitle mb-2 text-muted">Alamat</h6>
              <p class="card-text"><?php echo $row['alamat']; ?></p>
            </div>
            <div class="card-footer">
              <a href="#"><?php echo $row['email']; ?></a>
            </div>
          </div>
        </div>   
<?php }?>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->

