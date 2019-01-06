        <?php 
        if(empty($_SESSION["nm_user"])){
            header("location: login.php");
        }
            require_once('../koneksi_pdo.php');
            $id=$_GET['id'];
            $data = $conn->prepare("SELECT * FROM publikasi WHERE id_pub='$id'");
            $data->execute();
            $row = $data->fetch();
            $id=$row['id_pub'];
        ?>
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Update</strong> Publikasi
                            </div>
                            <form action="fungsi/f_update.php<?php echo '?id_pub='.$id; ?>" method="POST" enctype="multipart/form-data" class="form-Publikasi">
                                <input type="hidden" name="fungsi" value="publikasi">
                                <div class="card-body card-block">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="judul-input" class=" form-control-label">Judul Publikasi</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="judul_pub" name="judul_pub" value="<?php echo $row['judul_pub']; ?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tanggal-input" class=" form-control-label">Tanggal Publikasi</label></div>
                                        <div class="col-12 col-md-9"><input type="date" id="tgl_pub" name="tgl_pub" value="<?php echo $row['tgl_pub']; ?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="ket-input" class=" form-control-label">Keterangan Publikasi</label></div>
                                        <div class="col-12 col-md-9"><textarea name="ket_pub" id="ket_pub" rows="9" class="ckeditor"><?php echo $row['ket_pub']; ?></textarea></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="img-input" class=" form-control-label">Input Gambar</label></div>
                                        <div class="col-12 col-md-9">
                                            <?php if($row['img_pub'] != ""): ?>
                                            <img src="images/<?php echo $row['img_pub']; ?>" width="150px" style="border:1px solid #333333;">
                                            <?php else: ?>
                                            <img src="images/default.png" width="150px" height="150px" style="border:1px solid #333333;">
                                            <?php endif; ?>
                                            <input type="file" id="img_pub" name="img_pub" class="form-control-file">
                                        </div>
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