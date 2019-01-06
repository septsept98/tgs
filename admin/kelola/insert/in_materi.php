        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Insert</strong> Materi
                            </div>
                            <form action="fungsi/f_insert.php" method="post" enctype="multipart/form-data" class="form-Materi">
                                <input type="hidden" name="fungsi" value="materi">
                                <div class="card-body card-block">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="judul-input" class=" form-control-label">Judul Materi</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="judul_materi" name="judul_materi" placeholder="Judul Materi" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tanggal-input" class=" form-control-label">Tanggal Materi</label></div>
                                        <div class="col-12 col-md-9"><input type="date" id="tgl_materi" name="tgl_materi" placeholder="Tanggal Materi" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="img-input" class=" form-control-label">Input Gambar</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="img_materi" name="img_materi" class="form-control-file"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="ket-input" class=" form-control-label">Keterangan Materi</label></div>
                                        <div class="col-12 col-md-9"><textarea class="ckeditor" name="ket_materi" id="ket_materi" rows="9" placeholder="Keterangan..." class="form-control"></textarea></div>
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