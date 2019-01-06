    <div class="container">

      <h1 class="my-4 mb-3">Berita</h1>      

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Informasi</li>
      </ol>

      <!-- Marketing Berita -->
      <div class="row">
        <?php
          $sql = $conn->prepare("SELECT * FROM berita b, kategori k WHERE b.id_kategori=k.id_kategori");
          $sql->execute();
          for($i=0;$row=$sql->fetch();$i++){
        ?>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href=""><img class="card-img-top" src="admin/images/<?php echo $row['img_berita']; ?>" alt=""></a>
            <div class="card-body">
              <h4 class="card-title text-center">
                <a href="" class="text-dark"><?php echo $row['judul_berita'] ?></a>
              </h4>
              <h6 class="card-subtitle mb-2 text-muted"><?php echo $row['nama_kategori'] ?></h6>
              <p class="card-text">
                <?php if(strlen($row['ket_berita']) > 50){
                  echo substr($row['ket_berita'], 0, 50)."....";
                }else{
                  echo $row['ket_berita'];
                } ?> 
              </p>
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
            <div class="card-footer">
              Posted on <?php echo $row['tgl_berita']; ?> by
              <a href="#"><?php echo $row['penulis']; ?></a>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>