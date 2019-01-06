<?php 
session_start();
try{
$conn = new PDO('mysql:host=localhost; dbname=dblab_rpl','root', ''); 
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
	echo $e->getMessage();
}

?>