        <?php 
        if(empty($_SESSION["nm_user"])){
            header("location: login.php");
        }
            require_once('../koneksi_pdo.php');
            $id=$_GET['id'];
            $data = $conn->prepare("SELECT * FROM user WHERE id='$id'");
            $data->execute();
            $row = $data->fetch();
            $id=$row['id'];
        ?>
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Update</strong> ADMIN
                            </div>
                            <form action="fungsi/f_update.php<?php echo '?id='.$id; ?>" method="POST" enctype="multipart/form-data" class="form-kegiatan">
                                <input type="hidden" name="fungsi" value="admin">
                                <div class="card-body card-block">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Nama Lengkap</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nm_user" name="nm_user" value="<?php echo $row['nm_user']; ?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Username</label></div>
                                        <div class="col-12 col-md-9"><input type="username" id="username" name="username" value="<?php echo $row['username']; ?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">E-Mail</label></div>
                                        <div class="col-12 col-md-9"><input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Password</label></div>
                                        <div class="col-12 col-md-9"><input type="password" id="password" name="password" value="" class="form-control" required></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Input Gambar</label></div>
                                        <div class="col-12 col-md-9">
                                            <?php if($row['img_user'] != ""): ?>
                                            <img src="images/avatar/<?php echo $row['img_user']; ?>" width="150px" style="border:1px solid #333333;">
                                            <?php else: ?>
                                            <img src="images/default.png" width="150px" height="150px" style="border:1px solid #333333;">
                                            <?php endif; ?>
                                            <input type="file" id="img_user" name="img_user" class="form-control-file">
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
