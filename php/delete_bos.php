<?php
//koneksi sql
include 'koneksi.php';
//proses delete
if (isset($_GET['Del'])) {
	
	$idbos = $_GET['Del'];
	$query = "DELETE FROM user_bos WHERE id_bos = '".$idbos."'";
	$result = mysqli_query($conn, $query);

	if ($result) {
	
		header("location:../data_bos.php");
	}else{
		echo 'please check again';
	}
}

?>