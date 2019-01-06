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
                                    <li><a href="">Anggota</a></li>
                                    <li class="active">Mahasiswa</li>
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
                                <center><strong class="card-title"><h3>Mahasiswa</h3></strong></center>
                            </div>
                            <div class="card-body">
                                <p>
                                    <a class="btn btn-success" href="index.php?hal=in_mahasiswa">Tambah Mahasiswa</a>
                                </p>
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                    <tr align="center">
                                        <th scope="col">#</th>
                                        <th scope="col">NIM</th>
                                        <th scope="col">Nama Mahasiswa</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Email</th>
                                        <th width="160px">Aksi</th>
                                    </tr>
                                    </thead>
                                    <?php
                                        require_once('../koneksi_pdo.php');
                                        $no = 1;
                                        $data = $conn->prepare("SELECT * FROM mahasiswa ORDER BY nim ASC");
                                        $data->execute();
                                        for($i=0;$row = $data->fetch(); $i++){
                                            $id=$row['id_mhs'];
                                    ?>
                                  <tbody>
                                    <tr align="center">
                                        <th scope="row"><?php echo $no++; ?></th>
                                        <td><?php echo $row['nim']; ?></td>
                                        <td><?php echo $row['nm_mhs']; ?></td>
                                        <td><?php echo $row['alamat']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td>
                                            <a href="index.php?hal=up_mahasiswa&&id=<?php echo $id; ?>" class="btn btn-warning">Edit</a>
                                            <a href="index.php?hal=mahasiswa&&id=<?php echo $id; ?>" onclick="return confirm('Anda Yakin Akan Menghapus Data <?php echo $row['nm_mhs']; ?>?')" class="btn btn-danger">Hapus</a>
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