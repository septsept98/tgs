        <?php
        if(empty($_SESSION["nm_user"])){
            header("location: login.php");
        }
            $fungsi='admin';
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
                                    <li class="active">Admin</li>
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
                                <center><strong class="card-title"><h3>Admin</h3></strong></center>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                    <tr align="center">
                                        <th>#</th>
                                        <th>Poto</th>
                                        <th>Nama Pengguna</th>
                                        <th>Username</th>
                                        <th>E-Mail</th>
                                        <th>Password</th>
                                        <th width="160px">Aksi</th>
                                    </tr>
                                    </thead>
                                    <?php
                                        $no = 1;
                                    ?>
                                  <tbody>
                                    <tr align="center">
                                        <th><?php echo $no++; ?></th>
                                        <td class="avatar">
                                            <?php if($row['img_user'] != ""): ?>
                                            <img src="images/avatar/<?php echo $row['img_user']; ?>" width="100px" style="border:1px solid #333333;">
                                            <?php else: ?>
                                            <img src="images/default.png" width="100px" height="100px" style="border:1px solid #333333;">
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo $row['nm_user']; ?></td>
                                        <td><?php echo $row['username']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['password']; ?></td>
                                        <td>
                                            <a href="index.php?hal=up_admin&&id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a>
                                            <a href="index.php?hal=admin&&id=<?php echo $row['id']; ?>" onclick="return confirm('Anda Yakin Akan Menghapus Data <?php echo $row['username']; ?>?')" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                  </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

            </div><!-- .animated -->
        </div><!-- .content -->