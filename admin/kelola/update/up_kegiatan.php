        <?php 
        if(empty($_SESSION["nm_user"])){
            header("location: login.php");
        }
            require_once('../koneksi_pdo.php');
            $id=$_GET['id'];
            $data = $conn->prepare("SELECT * FROM kegiatan WHERE id_keg='$id'");
            $data->execute();
            $row = $data->fetch();
            $id=$row['id_keg'];
        ?>
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Update</strong> Kegiatan
                            </div>
                            <form action="fungsi/f_update.php<?php echo '?id_keg='.$id; ?>" method="POST" enctype="multipart/form-data" class="form-kegiatan">
                                <input type="hidden" name="fungsi" value="kegiatan">
                                <div class="card-body card-block">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="judul-input" class=" form-control-label">Judul Kegiatan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="judul_keg" name="judul_keg" value="<?php echo $row['judul_keg']; ?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kategori" class=" form-control-label">Kategori</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="kategori" id="kategori" class="form-control">
                                                <option <?php if($row['kategori']=='Workshop'){echo "selected";} ?> value="Workshop">Workshop</option>
                                                <option <?php if($row['kategori']=='Klinik'){echo "selected";} ?> value="Klinik">Klinik</option>
                                                <option <?php if($row['kategori']=='Lomba'){echo "selected";} ?> value="Lomba">Lomba</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tanggal-input" class=" form-control-label">Tanggal Kegiatan</label></div>
                                        <div class="col-12 col-md-9"><input type="date" id="tgl_keg" name="tgl_keg" value="<?php echo $row['tgl_keg']; ?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="ket-input" class=" form-control-label">Keterangan Kegiatan</label></div>
                                        <div class="col-12 col-md-9"><textarea name="ket_keg" id="ket_keg" rows="9" class="ckeditor"><?php echo $row['ket_keg']; ?></textarea></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="img-input" class=" form-control-label">Input Gambar</label></div>
                                        <div class="col-12 col-md-9">
                                            <?php if($row['img_keg'] != ""): ?>
                                            <img src="images/<?php echo $row['img_keg']; ?>" width="150px" style="border:1px solid #333333;">
                                            <?php else: ?>
                                            <img src="images/default.png" width="150px" height="150px" style="border:1px solid #333333;">
                                            <?php endif; ?>
                                            <input type="file" id="img_keg" name="img_keg" class="form-control-file">
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