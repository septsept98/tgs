<?php
  if(isset($_POST['save'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $data = "INSERT INTO buku_tamu VALUES('','$name','$email','$message')";
    $conn->exec($data);
    echo "<script>alert('Berhasil Input Pesan!!');</script>";
  }
?>
    <!-- Page Content -->
    <div class="container">
     <form action="search.php" method="get">
      <div class="input-group my-4">
          <input type="text" class="form-control" name="keyword" placeholder="Search for...">
          <span class="input-group-btn">
            <button class="btn btn-search" type="submit"><i class="fa fa-search fa-fw"></i> Search</button></a>
          </span>
      </div>
     </form>

    </div>
    <div class="container">
      <h1 class="my-4 text-center">Bidang Kajian</h1>
      <hr>   
      <!-- Marketing Berita -->
      <div class="row">
        <?php
          $sql = $conn->prepare("SELECT * FROM bidang_kajian ORDER BY id_kaj DESC limit 6 ");
          $sql->execute();
          for($i=0;$row=$sql->fetch();$i++){
        ?>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header"><?php echo $row['judul_kaj']; ?></h4>
            <div class="card-body">
              <p class="card-text">                
                <?php if(strlen($row['ket_kaj']) > 50){
                  echo substr($row['ket_kaj'], 0, 50)."....";
                }else{
                  echo $row['ket_kaj'];
                } ?> 
              </p>
            </div>
            <div class="card-footer">
              <a href="<?php echo 'index.php?hal=detail&&judul='.$row['judul_kaj']; ?>" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
      <br>
      <!-- Features Section -->
      <div class="row">
        <div class="col-lg-12">
          <h2 class="text-center">Buku Tamu</h2>  
          <hr>
          <center>
        <div class="col-lg-8 mb-4">
          <form name="sentMessage" id="contactForm" method="post">
            <div class="control-group form-group">
              <div class="controls">
                <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama Lengkap." required >
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Alamat E-Mail." required>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <textarea rows="10" cols="100" class="form-control" id="message" name="message" required placeholder="Tulis Pesan...." maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" name="save" class="btn btn-primary" id="sendMessageButton">Send Message</button>
          </form>
        </div>
      </center>
      <?php
        $sql = $conn->prepare("SELECT * FROM buku_tamu ORDER BY id DESC LIMIT 3");
        $sql->execute();
        for($i=0; $tampil = $sql->fetch(); $i++){
      ?>
          <hr>
          <div class="media mb-4">
            <div class="media-body">
              <h6 class="mt-0"><b><?php echo $tampil['fullname']; ?></b></h6>
              <h6 class="mt-0"><i><?php echo $tampil['email']; ?></i></h6>
              <?php echo $tampil['message']; ?>
            </div>
          </div>
      <?php }?>


          </div>
        </div>
      </div>
    <!-- /.container -->