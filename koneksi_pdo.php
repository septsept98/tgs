<?php 
session_start();
try{
$conn = new PDO('mysql:host=sql12.freemysqlhosting.net; dbname=sql12272865','sql12272865', 'ngDULIdhpx'); 
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
	echo $e->getMessage();
}

?>