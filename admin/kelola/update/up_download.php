        <?php 
        if(empty($_SESSION["nm_user"])){
            header("location: login.php");
        }
            require_once('../koneksi_pdo.php');
            $id=$_GET['id'];
            $data = $conn->prepare("SELECT * FROM daftardl WHERE id_dl='$id'");
            $data->execute();
            $row = $data->fetch();
            $id=$row['id_dl'];
        ?>
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Update</strong> Download
                            </div>
                            <form action="fungsi/f_update.php<?php echo '?id_dl='.$id; ?>" method="POST" enctype="multipart/form-data" class="form-Download">
                                <input type="hidden" name="fungsi" value="download">
                                <div class="card-body card-block">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="judul-input" class=" form-control-label">Judul Download</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="judul_dl" name="judul_dl" value="<?php echo $row['judul_dl']; ?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kategori" class=" form-control-label">Kategori</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="kategori" id="kategori" class="form-control">
                                                <option <?php if($row['kategori']=='Jurnal'){echo "selected";} ?> value="Jurnal">Jurnal</option>
                                                <option <?php if($row['kategori']=='E-Book'){echo "selected";} ?> value="E-Book">E-Book</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="ket-input" class=" form-control-label">Keterangan Download</label></div>
                                        <div class="col-12 col-md-9"><textarea name="ket_dl" id="ket_dl" rows="9" class="ckeditor"><?php echo $row['ket_dl']; ?></textarea></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="img-input" class=" form-control-label">Input Gambar</label></div>
                                        <div class="col-12 col-md-9">
                                            <?php if($row['img_dl'] != ""): ?>
                                            <img src="images/<?php echo $row['img_dl']; ?>" width="150px" style="border:1px solid #333333;">
                                            <?php else: ?>
                                            <img src="images/default.png" width="150px" height="150px" style="border:1px solid #333333;">
                                            <?php endif; ?>
                                            <input type="file" id="img_dl" name="img_dl" class="form-control-file">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="link-input" class=" form-control-label">Link</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="link" name="link" value="<?php echo $row['link']; ?>" class="form-control"></div>
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