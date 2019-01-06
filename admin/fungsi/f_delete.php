<?php       
require_once('../koneksi_pdo.php');	

$fungsi = $_GET['hal'];
if($fungsi=='kegiatan'){
	$id = $_GET['id'];
	$sql = "DELETE FROM kegiatan WHERE id_keg='$id' ";
	$conn->exec($sql);
}elseif ($fungsi=='admin') {
	$id = $_GET['id'];
	$sql = "DELETE FROM user WHERE id='$id'";
	$conn->exec($sql);
	if($id){
		session_destroy();
		echo "<script>alert('Delete Success!! ');window.location='login.php';</script>";
	}
}elseif($fungsi=='bdg_kajian'){
	$id = $_GET['id'];
	$sql = "DELETE FROM bidang_kajian WHERE id_kaj='$id' ";
	$conn->exec($sql);
}elseif($fungsi=='mahasiswa'){
	$id = $_GET['id'];
	$sql = "DELETE FROM mahasiswa WHERE id_mhs='$id' ";
	$conn->exec($sql);
}elseif($fungsi=='alumni'){
	$id = $_GET['id'];
	$sql = "DELETE FROM alumni WHERE id_alumni='$id' ";
	$conn->exec($sql);
}elseif($fungsi=='dosen'){
	$id = $_GET['id'];
	$sql = "DELETE FROM dosen WHERE kd_dosen='$id' ";
	$conn->exec($sql);
}elseif($fungsi=='materi'){
	$id = $_GET['id'];
	$sql = "DELETE FROM materi WHERE id_materi='$id' ";
	$conn->exec($sql);
}elseif($fungsi=='kategori'){
	$id = $_GET['id'];
	$sql = "DELETE FROM kategori WHERE id_kategori='$id' ";
	$conn->exec($sql);
}elseif($fungsi=='download'){
	$id = $_GET['id'];
	$sql = "DELETE FROM daftardl WHERE id_dl='$id' ";
	$conn->exec($sql);
}elseif($fungsi=='publikasi'){
	$id = $_GET['id'];
	$sql = "DELETE FROM publikasi WHERE id_pub='$id' ";
	$conn->exec($sql);
}elseif($fungsi=='topik'){
	$id = $_GET['id'];
	$sql = "DELETE FROM topik WHERE id_topik='$id' ";
	$conn->exec($sql);
}
?>
