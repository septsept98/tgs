<?php
	require_once "../koneksi_pdo.php";
	session_destroy();

	echo "<script>alert('Logout Success!!');window.location='login.php';</script>";
	
?>