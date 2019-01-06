<?php 
require_once('../koneksi_pdo.php');
if(empty($_SESSION["nm_user"])){
    header("location: login.php");
}
$data = $conn->prepare("SELECT * FROM user WHERE username = '$_SESSION[username]'");
$data->execute();
$row = $data->fetch();

$hal = $_GET['hal'];
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">        
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <!-- /.menu-title -->
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php?hal=dashboard"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">Master</li>
                    <li>
                        <a href="index.php?hal=admin"> <i class="menu-icon fa fa-user klik_page" id="admin"></i>Admin </a>
                    <li>
                        <a href="index.php?hal=bdg_kajian"><i class="menu-icon fa fa-info"></i>Bidang Kajian </a></a>
                    </li>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#Penelitian" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Penelitian</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-book"></i><a href="index.php?hal=topik">Topik</a></li>
                            <li><i class="fa fa-fire"></i><a href="index.php?hal=publikasi">Publikasi</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#Anggota" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-male"></i>Anggota</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-id-badge"></i><a href="index.php?hal=dosen">Dosen</a></li>
                            <li><i class="menu-icon fa fa-id-badge"></i><a href="index.php?hal=mahasiswa">Mahasiswa</a></li>
                            <li><i class="menu-icon fa fa-id-badge"></i><a href="index.php?hal=alumni">Alumni</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#Informasi" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Informasi</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="index.php?hal=kategori">Kategori</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="index.php?hal=berita">Berita</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.php?hal=download"><i class="menu-icon fa fa-download"></i>Download </a></a>
                    </li>
                    <li>
                        <a href="index.php?hal=materi"><i class="menu-icon fa fa-book"></i>Materi </a></a>
                    </li>
                    <li>
                        <a href="index.php?hal=kegiatan""><i class="menu-icon ti-bar-chart"></i>Kegiatan </a></a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php if($row['img_user'] != ""): ?>
                                <img class="user-avatar rounded-circle" src="images/avatar/<?php echo $row['img_user']; ?>" alt="User Avatar">
                            <?php else: ?>
                                <img class="user-avatar rounded-circle" src="images/default.png" alt="User Avatar">
                            <?php endif; ?>
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="index.php?hal=admin"><i class="fa fa- user"></i>My Profile</a>

                            <a class="nav-link" href="logout.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
        <div id="halaman"></div>
        <?php
            if($hal=='dashboard'||$hal==''){
                include "dashboard.php";
            }elseif ($hal=='admin') {
                include "kelola/admin.php";
            }elseif ($hal=='up_admin') {
                include "kelola/update/up_admin.php";
            }elseif ($hal=='bdg_kajian') {
                include "kelola/bidang_kajian.php";
            }elseif ($hal=='in_kajian') {
                include "kelola/insert/in_kajian.php";
            }elseif ($hal=='up_kajian') {
                include "kelola/update/up_kajian.php";
            }elseif ($hal=='topik') {
                include "kelola/topik.php";
            }elseif ($hal=='in_topik') {
                include "kelola/insert/in_topik.php";
            }elseif ($hal=='up_topik') {
                include "kelola/update/up_topik.php";
            }elseif ($hal=='publikasi') {
                include "kelola/publikasi.php";
            }elseif ($hal=='in_publik') {
                include "kelola/insert/in_publik.php";
            }elseif ($hal=='up_publik') {
                include "kelola/update/up_publik.php";
            }elseif ($hal=='dosen') {
                include "kelola/dosen.php";
            }elseif ($hal=='in_dosen') {
                include "kelola/insert/in_dosen.php";
            }elseif ($hal=='up_dosen') {
                include "kelola/update/up_dosen.php";
            }elseif ($hal=='mahasiswa') {
                include "kelola/mahasiswa.php";
            }elseif ($hal=='in_mahasiswa') {
                include "kelola/insert/in_mahasiswa.php";
            }elseif ($hal=='up_mahasiswa') {
                include "kelola/update/up_mahasiswa.php";
            }elseif ($hal=='alumni') {
                include "kelola/alumni.php";
            }elseif ($hal=='in_alumni') {
                include "kelola/insert/in_alumni.php";
            }elseif ($hal=='up_alumni') {
                include "kelola/update/up_alumni.php";
            }elseif ($hal=='kategori') {
                include "kelola/kategori.php";
            }elseif ($hal=='in_kategori') {
                include "kelola/insert/in_kategori.php";
            }elseif ($hal=='up_kategori') {
                include "kelola/update/up_kategori.php";
            }elseif ($hal=='berita') {
                include "kelola/berita.php";
            }elseif ($hal=='in_berita') {
                include "kelola/insert/in_berita.php";
            }elseif ($hal=='up_berita') {
                include "kelola/update/up_berita.php";
            }elseif ($hal=='download') {
                include "kelola/download.php";
            }elseif ($hal=='in_download') {
                include "kelola/insert/in_download.php";
            }elseif ($hal=='up_download') {
                include "kelola/update/up_download.php";
            }elseif ($hal=='materi') {
                include "kelola/materi.php";
            }elseif ($hal=='in_materi') {
                include "kelola/insert/in_materi.php";
            }elseif ($hal=='up_materi') {
                include "kelola/update/up_materi.php";
            }elseif ($hal=='kegiatan') {
                include "kelola/kegiatan.php";
            }elseif ($hal=='in_keg') {
                include "kelola/insert/in_kegiatan.php";
            }elseif ($hal=='up_keg') {
                include "kelola/update/up_kegiatan.php";
            }else{
                include "dashboard.php";
            }
        ?>
        <div class="clearfix"></div>
        <div class="footer"></div>
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>

    <script src="assets/js/main.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>

    <!--Local Stuff-->
    <script>
        function loadDoc(url, cFunction){
            var xhttp;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    cFunction(this);
                }
            };
            xhttp.open("GET", url, true);
            xhttp.send();
        }
        function myFunction(xhttp){
            document.getElementById('halaman').innerHTML = xhttp.responseText;
        }
        $(document).ready(function(){
            $('.footer').load('footer.php');
        });
    </script>
</body>
</html>
