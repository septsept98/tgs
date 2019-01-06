
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Insert</strong> Berita
                            </div>
                            <form action="fungsi/f_insert.php" method="post" enctype="multipart/form-data" class="form-Berita">
                                <input type="hidden" name="fungsi" value="berita">
                                <div class="card-body card-block">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="judul-input" class=" form-control-label">Judul Berita</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="judul_berita" name="judul_berita" placeholder="Judul Berita" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kategori" class=" form-control-label">ID Kategori</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="kategori" id="kategori" class="form-control">
                                                <option value="">Please select</option>
                                                <?php
                                                    require_once('../koneksi_pdo.php');
                                                    $data = $conn->prepare("SELECT * FROM kategori");
                                                    $data->execute();
                                                    for($i=0;$row = $data->fetch(); $i++){
                                                ?>
                                                <option value="<?php echo $row['id_kategori']; ?>"><?php echo $row['id_kategori']; ?>-<?php echo $row['nama_kategori'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="judul-input" class=" form-control-label">Penulis</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="penulis" name="penulis" placeholder="Penulis" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tanggal-input" class=" form-control-label">Tanggal Berita</label></div>
                                        <div class="col-12 col-md-9"><input type="date" id="tgl_berita" name="tgl_berita" placeholder="Tanggal Berita" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="ket-input" class=" form-control-label">Keterangan Berita</label></div>
                                        <div class="col-12 col-md-9"><textarea class="ckeditor" name="ket_berita" id="ket_berita" rows="9" placeholder="Keterangan..." class="form-control"></textarea></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="img-input" class=" form-control-label">Input Gambar</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="img_berita" name="img_berita" class="form-control-file"></div>
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