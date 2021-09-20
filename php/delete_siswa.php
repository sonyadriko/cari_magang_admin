<?php
//koneksi sql
include 'koneksi.php';
//proses delete
if (isset($_GET['Del'])) {
	
	$idsiswa = $_GET['Del'];
	$query = "DELETE FROM user_siswa WHERE id_siswa = '".$idsiswa."'";
	$result = mysqli_query($conn, $query);

	if ($result) {
	
		header("location:../data_siswa.php");
	}else{
		echo 'please check again';
	}
}

?>