<?php   
	require_once('../../koneksi_pdo.php');	
	$fungsi = $_POST['fungsi'];
	if($fungsi == 'kegiatan'){

		$id = $_REQUEST['id_keg'];

		$judul_keg = $_POST['judul_keg'];
		$kat = $_POST['kategori'];
		$tgl_keg = $_POST['tgl_keg'];
		$ket = $_POST['ket_keg'];
		move_uploaded_file($_FILES["img_keg"]["tmp_name"], "../images/".$_FILES["img_keg"]["name"]);
		$location = $_FILES["img_keg"]["name"];

		if($location != "")
			$sql = "UPDATE kegiatan SET judul_keg='$judul_keg', tgl_keg='$tgl_keg', ket_keg='$ket', img_keg='$location', kategori='$kat' WHERE id_keg='$id' ";
		else
			$sql = "UPDATE kegiatan SET judul_keg='$judul_keg', tgl_keg='$tgl_keg', ket_keg='$ket', kategori='$kat' WHERE id_keg='$id' ";

		$conn->exec($sql);
		echo "<script>alert('Success Update!!'); window.location='../index.php?hal=kegiatan'</script>";
	}elseif($fungsi == 'admin'){
		$Msg = '';
		$id = $_REQUEST['id'];

		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$password = sha1($password);
		$nm_user = $_POST['nm_user'];

			move_uploaded_file($_FILES["img_user"]["tmp_name"], "../images/avatar/".$_FILES["img_user"]["name"]);
			$location = $_FILES["img_user"]["name"];

			if($location != "")
				$sql = "UPDATE user SET username='$username',email='$email', password='$password', nm_user='$nm_user', img_user='$location' WHERE id='$id' ";
			else
				$sql = "UPDATE user SET username='$username',email='$email', password='$password', nm_user='$nm_user' WHERE id='$id' ";

			$conn->exec($sql);
			echo "<script>alert('Success Update!! Login Ulang'); window.location='../logout.php'</script>";
	}elseif($fungsi == 'kajian'){

		$id = $_REQUEST['id_kaj'];
		$judul_kaj = $_POST['judul_kaj'];
		$ket = $_POST['ket_kaj'];

		$sql = "UPDATE bidang_kajian SET judul_kaj='$judul_kaj', ket_kaj='$ket' WHERE id_kaj='$id'";

		$conn->exec($sql);
		echo "<script>alert('Success Update!!');window.location= '../index.php?hal=bdg_kajian';</script>";
		
	}elseif($fungsi == 'mahasiswa'){

		$id = $_REQUEST['id_mhs'];
		$nm_mhs = $_POST['nm_mhs'];
		$nim = $_POST['nim'];
		$alamat = $_POST['alamat'];
		$email = $_POST['email'];

		$sql = "UPDATE mahasiswa SET nm_mhs='$nm_mhs', nim='$nim', alamat='$alamat', email='$email' WHERE id_mhs='$id'";

		$conn->exec($sql);
		echo "<script>alert('Success Update!!');window.location= '../index.php?hal=mahasiswa';</script>";
		
	}elseif($fungsi == 'alumni'){

		$id = $_REQUEST['id_alumni'];
		$nm = $_POST['nm_alumni'];
		$alamat = $_POST['alamat'];
		$email = $_POST['email'];

		$sql = "UPDATE alumni SET nm_alumni='$nm', alamat='$alamat', email='$email' WHERE id_alumni='$id'";

		$conn->exec($sql);
		echo "<script>alert('Success Update!!');window.location= '../index.php?hal=alumni';</script>";
		
	}elseif($fungsi == 'dosen'){

		$id = $_REQUEST['kd_dosen'];
		$nm = $_POST['nm_dosen'];
		$alamat = $_POST['alamat'];
		$email = $_POST['email'];

		$sql = "UPDATE dosen SET nm_dosen='$nm', alamat='$alamat', email='$email' WHERE kd_dosen='$id'";

		$conn->exec($sql);
		echo "<script>alert('Success Update!!');window.location= '../index.php?hal=dosen';</script>";
		
	}elseif($fungsi == 'materi'){

		$id = $_REQUEST['id_materi'];

		$judul_materi = $_POST['judul_materi'];
		$kat = $_POST['kategori'];
		$tgl_materi = $_POST['tgl_materi'];
		$ket = $_POST['ket_materi'];
		move_uploaded_file($_FILES["img_materi"]["tmp_name"], "../images/".$_FILES["img_materi"]["name"]);
		$location = $_FILES["img_materi"]["name"];

		if($location != "")
			$sql = "UPDATE materi SET judul_materi='$judul_materi', ket_materi='$ket', img_materi='$location', tgl_materi='$tgl_materi' WHERE id_materi='$id' ";
		else
			$sql = "UPDATE materi SET judul_materi='$judul_materi', ket_materi='$ket', tgl_materi='$tgl_materi' WHERE id_materi='$id' ";

		$conn->exec($sql);
		echo "<script>alert('Success Update!!'); window.location='../index.php?hal=materi'</script>";
	}elseif($fungsi == 'kategori'){

		$id = $_REQUEST['id_kategori'];
		$nm = $_POST['nama_kategori'];

		$sql = "UPDATE kategori SET nama_kategori='$nm' WHERE id_kategori='$id'";

		$conn->exec($sql);
		echo "<script>alert('Success Update!!');window.location= '../index.php?hal=kategori';</script>";
		
	}elseif($fungsi == 'berita'){

		$id = $_REQUEST['id_berita'];
		$kat = $_POST['kategori'];
		$judul_berita = $_POST['judul_berita'];
		$ket = $_POST['ket_berita'];
		$tgl_berita = $_POST['tgl_berita'];
		$penulis = $_POST['penulis'];
		move_uploaded_file($_FILES["img_berita"]["tmp_name"], "../images/".$_FILES["img_berita"]["name"]);
		$location = $_FILES["img_berita"]["name"];

		if($location != "")
			$sql = "UPDATE berita SET id_kategori='$kat', judul_berita='$judul_berita', ket_berita='$ket', tgl_berita='$tgl_berita', penulis='$penulis', img_berita='$location'  WHERE id_berita='$id' ";
		else
			$sql = "UPDATE berita SET id_kategori='$kat', judul_berita='$judul_berita', ket_berita='$ket', tgl_berita='$tgl_berita', penulis='$penulis'  WHERE id_berita='$id' ";

		$conn->exec($sql);
		echo "<script>alert('Success Update!!'); window.location='../index.php?hal=berita'</script>";
	}elseif($fungsi == 'publikasi'){

		$id = $_REQUEST['id_pub'];
		$judul_pub = $_POST['judul_pub'];
		$tgl_pub = $_POST['tgl_pub'];
		$ket = $_POST['ket_pub'];
		move_uploaded_file($_FILES["img_pub"]["tmp_name"], "../images/".$_FILES["img_pub"]["name"]);
		$location = $_FILES["img_pub"]["name"];

		if($location != "")
			$sql = "UPDATE publikasi SET judul_pub='$judul_pub', tgl_pub='$tgl_pub', ket_pub='$ket', img_pub='$location'  WHERE id_pub='$id' ";
		else
			$sql = "UPDATE publikasi SET judul_pub='$judul_pub', tgl_pub='$tgl_pub', ket_pub='$ket' WHERE id_pub='$id' ";

		$conn->exec($sql);
		echo "<script>alert('Success Update!!'); window.location='../index.php?hal=publikasi'</script>";
	}elseif($fungsi == 'topik'){

		$id = $_REQUEST['id_topik'];
		$judul_topik = $_POST['judul_topik'];
		$ket = $_POST['ket_topik'];
		$tgl_topik = $_POST['tgl_topik'];
		move_uploaded_file($_FILES["img_topik"]["tmp_name"], "../images/".$_FILES["img_topik"]["name"]);
		$location = $_FILES["img_topik"]["name"];

		if($location != "")
			$sql = "UPDATE topik SET judul_topik='$judul_topik', ket_topik='$ket', tgl_topik='$tgl_topik', img_topik='$location'  WHERE id_topik='$id' ";
		else
			$sql = "UPDATE topik SET judul_topik='$judul_topik', ket_topik='$ket', tgl_topik='$tgl_topik' WHERE id_topik='$id' ";

		$conn->exec($sql);
		echo "<script>alert('Success Update!!'); window.location='../index.php?hal=topik'</script>";
	}elseif($fungsi == 'download'){

		$id = $_REQUEST['id_dl'];
		$judul_dl = $_POST['judul_dl'];
		$kat = $_POST['kategori'];
		$ket = $_POST['ket_dl'];
		$link = $_POST['link'];
		move_uploaded_file($_FILES["img_dl"]["tmp_name"], "../images/".$_FILES["img_dl"]["name"]);
		$location = $_FILES["img_dl"]["name"];

		if($location != "")
			$sql = "UPDATE daftardl SET judul_dl='$judul_dl', kategori='$kat', ket_dl='$ket', img_dl='$location'  WHERE id_dl='$id' ";
		else
			$sql = "UPDATE daftardl SET judul_dl='$judul_dl', kategori='$kat', ket_dl='$ket' WHERE id_dl='$id' ";

		$conn->exec($sql);
		echo "<script>alert('Success Update!!'); window.location='../index.php?hal=download'</script>";
	}
?>