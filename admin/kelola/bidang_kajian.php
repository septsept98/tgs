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
                                    <li class="active">Bidang Kajian</li>
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
                                <center><strong class="card-title"><h3>Bidang Kajian</h3></strong></center>
                            </div>
                            <div class="card-body">
                                <p>
                                    <a class="btn btn-success" href="index.php?hal=in_kajian">Tambah Bidang Kajian</a>
                                </p>
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                    <tr align="center">
                                        <th scope="col">#</th>
                                        <th scope="col">Judul Kajian</th>
                                        <th scope="col">Keterangan Kajian</th>
                                        <th width="160px">Aksi</th>
                                    </tr>
                                    </thead>
                                    <?php
                                        require_once('../koneksi_pdo.php');
                                        $no = 1;
                                        $data = $conn->prepare("SELECT * FROM bidang_kajian");
                                        $data->execute();
                                        for($i=0;$row = $data->fetch(); $i++){
                                            $id=$row['id_kaj'];
                                    ?>
                                  <tbody>
                                    <tr align="center">
                                        <th scope="row"><?php echo $no++; ?></th>
                                        <td><?php echo $row['judul_kaj']; ?></td>
                                        <td><?php if(strlen($row['ket_kaj']) > 50){
                                                echo substr($row['ket_kaj'], 0, 50)."....";
                                            }else{
                                                echo $row['ket_kaj'];
                                            }
                                                ?>                                                          
                                        </td>
                                        <td>
                                            <a href="index.php?hal=up_kajian&&id=<?php echo $id; ?>" class="btn btn-warning">Edit</a>
                                            <a href="index.php?hal=bdg_kajian&&id=<?php echo $id; ?>" onclick="return confirm('Anda Yakin Akan Menghapus Data <?php echo $row['judul_kaj']; ?>?')" class="btn btn-danger">Hapus</a>
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