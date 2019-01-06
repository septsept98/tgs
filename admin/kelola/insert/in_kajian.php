        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Insert</strong> Bidang Kajian
                            </div>
                            <form action="fungsi/f_insert.php" method="post" enctype="multipart/form-data" class="form-kegiatan">
                                <input type="hidden" name="fungsi" value="kajian">
                                <div class="card-body card-block">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="judul-input" class=" form-control-label">Judul Kajian</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="judul_kaj" name="judul_kaj" placeholder="Judul Kajian" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="ket-input" class=" form-control-label">Keterangan Kajian</label></div>
                                        <div class="col-12 col-md-9"><textarea class="ckeditor" name="ket_kaj" id="ket_kaj" rows="9" placeholder="Keterangan..." class="form-control"></textarea></div>
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