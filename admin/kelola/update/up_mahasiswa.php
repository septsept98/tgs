        <?php 
        if(empty($_SESSION["nm_user"])){
            header("location: login.php");
        }
            require_once('../koneksi_pdo.php');
            $id=$_GET['id'];
            $data = $conn->prepare("SELECT * FROM mahasiswa WHERE id_mhs='$id'");
            $data->execute();
            $row = $data->fetch();
        ?>
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Update</strong> Mahasiswa
                            </div>
                            <form action="fungsi/f_update.php<?php echo '?id_mhs='.$id; ?>" method="POST" enctype="multipart/form-data" class="form-kegiatan">
                                <input type="hidden" name="fungsi" value="mahasiswa">
                                <div class="card-body card-block">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="judul-input" class=" form-control-label">Nama Mahasiswa</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nm_mhs" name="nm_mhs" value="<?php echo $row['nm_mhs']; ?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tanggal-input" class=" form-control-label">NIM</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nim" name="nim" value="<?php echo $row['nim']; ?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="ket-input" class=" form-control-label">Alamat</label></div>
                                        <div class="col-12 col-md-9"><textarea name="alamat" id="alamat" rows="9" class="form-control"><?php echo $row['alamat']; ?></textarea></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tanggal-input" class=" form-control-label">E-Mail</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="email" name="email"value="<?php echo $row['email']; ?>" class="form-control"></div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal" onclick="window.history.back()">Close</button>
                                    <button type="submit" id="simpan" name="simpan" class="btn btn-success">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>