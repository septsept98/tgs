        <?php 
        if(empty($_SESSION["nm_user"])){
            header("location: login.php");
        }
            require_once('../koneksi_pdo.php');
            $id=$_GET['id'];
            $data = $conn->prepare("SELECT * FROM berita WHERE id_berita='$id'");
            $data->execute();
            $row = $data->fetch();
            $id=$row['id_berita'];
        ?>
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Update</strong> Berita
                            </div>
                            <form action="fungsi/f_update.php<?php echo '?id_berita='.$id; ?>" method="POST" enctype="multipart/form-data" class="form-Berita">
                                <input type="hidden" name="fungsi" value="berita">
                                <div class="card-body card-block">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="judul-input" class=" form-control-label">Judul Berita</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="judul_berita" name="judul_berita" value="<?php echo $row['judul_berita']; ?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kategori" class=" form-control-label">Kategori</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="kategori" id="kategori" class="form-control">
                                                <?php
                                                    $sql = $conn->prepare("SELECT * FROM kategori");
                                                    $sql->execute();
                                                    for($i=0;$tampil = $sql->fetch(); $i++){
                                                ?>
                                                <option <?php if($row['id_kategori']==$tampil['id_kategori']){echo "selected";} ?> value="<?php echo $tampil['id_kategori']; ?>"><?php echo $tampil['id_kategori']; ?>-<?php echo $tampil['nama_kategori']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tanggal-input" class=" form-control-label">Penulis</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="penulis" name="penulis" value="<?php echo $row['penulis']; ?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tanggal-input" class=" form-control-label">Tanggal Berita</label></div>
                                        <div class="col-12 col-md-9"><input type="date" id="tgl_berita" name="tgl_berita" value="<?php echo $row['tgl_berita']; ?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="ket-input" class=" form-control-label">Keterangan Berita</label></div>
                                        <div class="col-12 col-md-9"><textarea name="ket_berita" id="ket_berita" rows="9" class="ckeditor"><?php echo $row['ket_berita']; ?></textarea></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="img-input" class=" form-control-label">Input Gambar</label></div>
                                        <div class="col-12 col-md-9">
                                            <?php if($row['img_berita'] != ""): ?>
                                            <img src="images/<?php echo $row['img_berita']; ?>" width="150px" style="border:1px solid #333333;">
                                            <?php else: ?>
                                            <img src="images/default.png" width="150px" height="150px" style="border:1px solid #333333;">
                                            <?php endif; ?>
                                            <input type="file" id="img_berita" name="img_berita" class="form-control-file">
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