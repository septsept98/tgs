<?php
	require_once('../koneksi_pdo.php');

	if(isset($_POST['login'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
        $password = sha1($password);

			try{
				$stmt = $conn->prepare("SELECT * FROM user WHERE username=:username OR email=:username");
				$stmt->execute(array(
					':username' => $username
				));
				$data = $stmt->fetch(PDO::FETCH_ASSOC);

				if($data == false){
					echo '<div style="color:white;"><center>User <b>'.$username.'</b> Not Found.<center></div>';
				}else{
					if($password == $data['password']){
                        $_SESSION['username'] = $data['username'];
						$_SESSION['email'] = $data['email'];
						$_SESSION['password'] = $data['password'];
						$_SESSION['nm_user']  = $data['nm_user'];
						$_SESSION['img_user'] = $data['img_user'];

						header('Location: index.php');
						exit;
					}else{
						echo '<div style="color:white;"><center>Password not match.</center></div>';
					}
				}
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Login</title>

    <!-- Bootstrap CSS -->    
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/css/style.css" rel="stylesheet">
    <style type="text/css">
        body{
            background-color: #23272a;
        }
    </style>
    
</head>

  <body>
    <div class="container">
        <div class="content">
            <div class="animated fadeIn">
                <center>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <center><strong>Login ADMIN</strong></center>
                            </div>
                            <form action="" method="post" enctype="multipart/form-data" class="form-kegiatan">
                                <input type="hidden" name="fungsi" value="kegiatan">
                                <div class="card-body card-block">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="judul-input" class=" form-control-label">Username or Email</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="username" name="username" placeholder="Username or Email" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tanggal-input" class=" form-control-label">Password</label></div>
                                        <div class="col-12 col-md-9"><input type="password" id="password" name="password" placeholder="Password" class="form-control"></div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <input type="submit" id="login" name="login" class="btn btn-info btn-lg btn-block" value="Login">
                                    <!-- <a href="register.php" class="btn btn-success btn-lg btn-block" type="submit">Signup</a> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </center>
            </div>
        </div>
    </div>
  </body>
</html>