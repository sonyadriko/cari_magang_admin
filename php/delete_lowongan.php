<?php
//koneksi sql
include 'koneksi.php';
//proses delete
if (isset($_GET['Del'])) {
	
	$idlowongan = $_GET['Del'];
	$query = mysqli_query($conn, "DELETE FROM tb_lowongan WHERE id_lowongan = '".$idlowongan."' ");
	//$result = mysqli_query($conn, $query);

	if ($query) {
		header("location:../data_lowongan.php");
	}else{
		echo 'Lowongan tidak bisa dihapus, karena ada yang melamar';
	}
}

?>