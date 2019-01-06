<?php
	require_once('../../koneksi_pdo.php');

	$fungsi = $_POST['fungsi'];
	if($fungsi == 'kegiatan'){
		$judul_keg = $_POST['judul_keg'];
		$kat = $_POST['kategori'];
		$tgl_keg = $_POST['tgl_keg'];
		$ket = $_POST['ket_keg'];

		move_uploaded_file($_FILES["img_keg"]["tmp_name"], "../images/".$_FILES["img_keg"]["name"]);
		$location = $_FILES["img_keg"]["name"];

		$sql = "INSERT INTO kegiatan VALUES('','$judul_keg','$tgl_keg','$ket','$location','$kat')";

		$conn->exec($sql);
		echo "<script>alert('Success Add!!');window.location= '../index.php?hal=kegiatan';</script>";
		
	}elseif($fungsi == 'admin'){
		$fullname = $_POST['nm_user'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		move_uploaded_file($_FILES["img_user"]["tmp_name"], "../images/avatar/".$_FILES["img_user"]["name"]);
		$location = $_FILES["img_user"]["name"];

		$sql = "INSERT INTO user VALUES('','$username','$email','$password','$fullname','$location')";

		$conn->exec($sql);
		echo "<script>alert('Success Add!! Silahkan Login'); window.location='../login.php'</script>";

	}elseif($fungsi == 'kajian'){
		$judul_kaj = $_POST['judul_kaj'];
		$ket = $_POST['ket_kaj'];

		$sql = "INSERT INTO bidang_kajian VALUES('','$judul_kaj','$ket')";

		$conn->exec($sql);
		echo "<script>alert('Success Add!!');window.location= '../index.php?hal=bdg_kajian';</script>";
		
	}elseif($fungsi == 'mahasiswa'){
		$nm = $_POST['nm_mhs'];
		$nim = $_POST['nim'];
		$alamat = $_POST['alamat'];
		$email = $_POST['email'];

		$sql = "INSERT INTO mahasiswa VALUES('','$nm','$nim','$alamat','$email')";

		$conn->exec($sql);
		echo "<script>alert('Success Add!!');window.location= '../index.php?hal=mahasiswa';</script>";
		
	}elseif($fungsi == 'alumni'){
		$nm = $_POST['nm_alumni'];
		$alamat = $_POST['alamat'];
		$email = $_POST['email'];

		$sql = "INSERT INTO alumni VALUES('','$nm','$alamat','$email')";

		$conn->exec($sql);
		echo "<script>alert('Success Add!!');window.location= '../index.php?hal=alumni';</script>";
		
	}elseif($fungsi == 'dosen'){
		$nm = $_POST['nm_dosen'];
		$alamat = $_POST['alamat'];
		$email = $_POST['email'];

		$sql = "INSERT INTO dosen VALUES('','$nm','$alamat','$email')";

		$conn->exec($sql);
		echo "<script>alert('Success Add!!');window.location= '../index.php?hal=dosen';</script>";
		
	}elseif($fungsi == 'materi'){
		$judul_materi = $_POST['judul_materi'];
		$tgl_materi = $_POST['tgl_materi'];
		$ket = $_POST['ket_materi'];

		move_uploaded_file($_FILES["img_materi"]["tmp_name"], "../images/".$_FILES["img_materi"]["name"]);
		$location = $_FILES["img_materi"]["name"];

		$sql = "INSERT INTO materi VALUES('','$judul_materi','$ket','$location','$tgl_materi')";

		$conn->exec($sql);
		echo "<script>alert('Success Add!!');window.location= '../index.php?hal=materi';</script>";
		
	}elseif($fungsi == 'kategori'){
		$a = $_POST['nama_kategori'];

		$sql = "INSERT INTO kategori VALUES('','$a')";

		$conn->exec($sql);
		echo "<script>alert('Success Add!!');window.location= '../index.php?hal=kategori';</script>";
		
	}elseif($fungsi == 'berita'){
		$judul_berita = $_POST['judul_berita'];
		$kat = $_POST['kategori'];
		$penulis = $_POST['penulis'];
		$tgl_berita = $_POST['tgl_berita'];
		$ket = $_POST['ket_berita'];

		move_uploaded_file($_FILES["img_berita"]["tmp_name"], "../images/".$_FILES["img_berita"]["name"]);
		$location = $_FILES["img_berita"]["name"];

		$sql = "INSERT INTO berita VALUES('','$kat','$judul_berita','$ket','$tgl_berita','$penulis','$location')";

		$conn->exec($sql);
		echo "<script>alert('Success Add!!');window.location= '../index.php?hal=berita';</script>";
		
	}elseif($fungsi == 'publikasi'){
		$judul_pub = $_POST['judul_pub'];
		$tgl = $_POST['tgl_pub'];
		$ket = $_POST['ket_pub'];

		move_uploaded_file($_FILES["img_pub"]["tmp_name"], "../images/".$_FILES["img_pub"]["name"]);
		$location = $_FILES["img_pub"]["name"];

		$sql = "INSERT INTO publikasi VALUES('','$judul_pub','$tgl','$ket','$location')";

		$conn->exec($sql);
		echo "<script>alert('Success Add!!');window.location= '../index.php?hal=publikasi';</script>";
		
	}elseif($fungsi == 'topik'){
		$judul_topik = $_POST['judul_topik'];
		$ket = $_POST['ket_topik'];
		$tgl = $_POST['tgl_topik'];

		move_uploaded_file($_FILES["img_topik"]["tmp_name"], "../images/".$_FILES["img_topik"]["name"]);
		$location = $_FILES["img_topik"]["name"];

		$sql = "INSERT INTO topik VALUES('','$judul_topik','$ket','$tgl','$location')";

		$conn->exec($sql);
		echo "<script>alert('Success Add!!');window.location= '../index.php?hal=topik';</script>";
		
	}elseif($fungsi == 'buku_tamu'){
	    $name = $_POST['name'];
	    $email = $_POST['email'];
	    $message = $_POST['message'];

	    $data = "INSERT INTO buku_tamu VALUES('','$name','$email','$message')";
	    $conn->exec($data);
	    echo "<script>alert('Berhasil Input Pesan!!');</script>";

  	}elseif($fungsi == 'download'){
		$judul_dl = $_POST['judul_dl'];
		$kat = $_POST['kategori'];
		$ket = $_POST['ket_dl'];
		$link = $_POST['link'];

		move_uploaded_file($_FILES["img_dl"]["tmp_name"], "../images/".$_FILES["img_dl"]["name"]);
		$location = $_FILES["img_dl"]["name"];

		$sql = "INSERT INTO daftardl VALUES('','$judul_dl','$kat','$ket','$location','$link')";

		$conn->exec($sql);
		echo "<script>alert('Success Add!!');window.location= '../index.php?hal=download';</script>";
		
	}
?>