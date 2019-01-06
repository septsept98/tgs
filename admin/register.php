<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Register</title>

    <!-- Bootstrap CSS -->    
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/css/style.css" rel="stylesheet">
    <style type="text/css">
        body{
            background-color: #23272a;
        }
    </style>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body>
    <div class="container">
        <div class="content">
            <div class="animated fadeIn">
                <center>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <center><strong>Register ADMIN</strong></center>
                            </div>
                            <form action="fungsi/f_insert.php" method="post" enctype="multipart/form-data" class="form-admin">
                                <input type="hidden" name="fungsi" value="admin">    
                                <div class="card-body card-block">
                                    <div class="row form-group">
                                        <div class="col-12 col-md-12"><input type="text" id="nm_user" name="nm_user" placeholder="Nama Lengkap" class="form-control" required></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-12 col-md-12"><input type="text" id="username" name="username" placeholder="Username" class="form-control" required></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-12 col-md-12"><input type="email" id="email" name="email" placeholder="E-Mail" class="form-control" required></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-12 col-md-12"><input type="password" id="password" name="password" placeholder="Password" class="form-control" required></div>
                                    </div>                 
                                    <div class="row form-group">
                                        <div class="col col-md-4"><label for="img-input" class=" form-control-label">Input Gambar</label></div>
                                        <div class="col-12 col-md-6"><input type="file" id="img_user" name="img_user" class="form-control-file" required></div>
                                    </div>
                                </div> 
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal" onclick="window.history.back()">Close</button>
                                    <button type="submit" id="simpan" name="simpan" class="btn btn-success">Save</button>
                                </div
                            </form>
                        </div>
                    </div>
                </center>
            </div>
        </div>
    </div>


  </body>
</html>
    <!-- <title>Register</title> -->

    <!-- Bootstrap CSS -->    
    <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet"> -->
    <!--external css-->
<!--     <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet"> 

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">

        <form action="fungsi/f_insert.php" method="post" enctype="multipart/form-data" class="form-admin">
        <input type="hidden" name="fungsi" value="admin">        
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" name="nm_user" placeholder="Nama Lengkap" autofocus required>
            </div>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" name="username" placeholder="Username" autofocus required>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>                  
            <div class="input-group">
                <div class="col col-md-3"><label for="img-input" class=" form-control-label">Input Gambar</label></div>
                <div class="col-12 col-md-9"><input type="file" id="img_user" name="img_user" class="form-control-file"></div>
            </div>
            <button class="btn btn-primary btn-lg btn-block" name="login" type="submit">Register</button>
        </div>
      </form>

    </div>
</div>
</div>
</div> -->