<?php

include 'koneksi.php';

if (isset($_POST['submit'])) {
	# code...
	$judul = $_POST['judul'];
	$jurusan = $_POST['jurusan'];
	$alamat = $_POST['alamat'];
	$jpelamar = $_POST['jumlah'];	
	$kota = $_POST['addkota'];
	$detail = $_POST['detail'];
	$tanggal = $_POST['tanggal'];

	$rand = rand();
	$ekstensi = array('png','jpg','jpeg');
	$filenama = $_FILES['foto']['name'];
	$ukuran = $_FILES['foto']['size'];
	$ext = pathinfo($filenama, PATHINFO_EXTENSION);

	if (!in_array($ext, $ekstensi)) {
		echo "<script>alert('ekstensi tidak diperbolehkan.')</script>";
	
	}else {
		if ($ukuran < 1044000) {

			$xx = $rand.'_'.$filenama;
			move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.$rand.'_'.$filenama);

			$insertData = "INSERT INTO tb_lowongan
			(`id_lowongan`, `id_bos`, `judul`, `jurusan`, `detail`, `alamat`, `gambar`, `kota`, `tanggal`, `kuota`) 
			VALUES (NULL, NULL, '$judul', '$jurusan', '$detail', '$alamat', '$xx', '$kota', '$tanggal', '$jpelamar')";

			$insertResult = mysqli_query($conn,$insertData);
		
			if ($insertResult) {
				# code...
				echo "<script>alert('Berhasil membuat lowongan baru.')</script>";
				header("Location:index.php");
			}else {
				//echo "ada yang error";
				var_dump($insertResult);
				die();
			}
	
		}

	}
}
?>