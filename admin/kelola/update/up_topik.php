        <?php 
        if(empty($_SESSION["nm_user"])){
            header("location: login.php");
        }
            require_once('../koneksi_pdo.php');
            $id=$_GET['id'];
            $data = $conn->prepare("SELECT * FROM topik WHERE id_topik='$id'");
            $data->execute();
            $row = $data->fetch();
            $id=$row['id_topik'];
        ?>
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Update</strong> Topik
                            </div>
                            <form action="fungsi/f_update.php<?php echo '?id_topik='.$id; ?>" method="POST" enctype="multipart/form-data" class="form-Topik">
                                <input type="hidden" name="fungsi" value="topik">
                                <div class="card-body card-block">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="judul-input" class=" form-control-label">Judul Topik</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="judul_topik" name="judul_topik" value="<?php echo $row['judul_topik']; ?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="ket-input" class=" form-control-label">Keterangan Topik</label></div>
                                        <div class="col-12 col-md-9"><textarea name="ket_topik" id="ket_topik" rows="9" class="ckeditor"><?php echo $row['ket_topik']; ?></textarea></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tanggal-input" class=" form-control-label">Tanggal Topik</label></div>
                                        <div class="col-12 col-md-9"><input type="date" id="tgl_topik" name="tgl_topik" value="<?php echo $row['tgl_topik']; ?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="img-input" class=" form-control-label">Input Gambar</label></div>
                                        <div class="col-12 col-md-9">
                                            <?php if($row['img_topik'] != ""): ?>
                                            <img src="images/<?php echo $row['img_topik']; ?>" width="150px" style="border:1px solid #333333;">
                                            <?php else: ?>
                                            <img src="images/default.png" width="150px" height="150px" style="border:1px solid #333333;">
                                            <?php endif; ?>
                                            <input type="file" id="img_topik" name="img_topik" class="form-control-file">
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