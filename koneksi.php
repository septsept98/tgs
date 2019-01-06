<?php
	$db='dblab_rpl';
	$conn = mysqli_connect('localhost','root','') or die("Tidak konek");
	$db = mysqli_select_db($conn,$db) or die ("Database tidak ada");
?>