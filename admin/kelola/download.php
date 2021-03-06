        <?php
        if(empty($_SESSION["nm_user"])){
            header("location: login.php");
        }
            include "fungsi/f_delete.php";
        ?>
        <!-- Content -->
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="index.php?hal=dasboard">Dashboard</a></li>
                                    <li class="active">Download</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <center><strong class="card-title"><h3>Download</h3></strong></center>
                            </div>
                            <div class="card-body">
                                <p>
                                    <a class="btn btn-success" href="index.php?hal=in_download">Tambah Download</a>
                                </p>
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                    <tr align="center">
                                        <th scope="col">#</th>
                                        <th scope="col">Judul Download</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Keterangan Download</th>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Link</th>
                                        <th width="160px">Aksi</th>
                                    </tr>
                                    </thead>
                                    <?php
                                        require_once('../koneksi_pdo.php');
                                        $no = 1;
                                        $data = $conn->prepare("SELECT * FROM daftardl");
                                        $data->execute();
                                        for($i=0;$row = $data->fetch(); $i++){
                                            $id=$row['id_dl'];
                                    ?>
                                  <tbody>
                                    <tr align="center">
                                        <th><?php echo $no++; ?></th>
                                        <td><?php echo $row['judul_dl']; ?></td>
                                        <td><?php echo $row['kategori']; ?></td>
                                        <td><?php if(strlen($row['ket_dl']) > 50){
                                                echo substr($row['ket_dl'], 0, 50)."....";
                                            }else{
                                                echo $row['ket_dl'];
                                            }
                                                ?>                                                          
                                        </td>
                                        <td class="avatar">
                                            <?php if($row['img_dl'] != ""): ?>
                                            <img src="images/<?php echo $row['img_dl']; ?>" width="100px" style="border:1px solid #333333;">
                                            <?php else: ?>
                                            <img src="images/default.png" width="100px" height="100px" style="border:1px solid #333333;">
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <a href="<?php echo $row['link']; ?>">
                                                <i class="menu-icon fa fa-download"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="index.php?hal=up_download&&id=<?php echo $id; ?>" class="btn btn-warning">Edit</a>
                                            <a href="index.php?hal=download&&id=<?php echo $id; ?>" onclick="return confirm('Anda Yakin Akan Menghapus Data <?php echo $row['judul_dl']; ?>?')" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php 
                                        }
                                    ?>
                                  </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

            </div><!-- .animated -->
        </div><!-- .content -->