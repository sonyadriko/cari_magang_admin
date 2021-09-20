<?php 
	include 'koneksi.php';
	session_start();


	if (isset($_POST['terima'])) {
		# code...
		$id_lowongan = $_GET['GetID'];
		$sts_terima = $_POST['status_terima'];
		$tanggal = $_POST['tanggal'];
		//$default = new DateTime($tanggal);
		date_default_timezone_set('Asia/Jakarta');
		$tgl = strtotime($tanggal);
		$plus = $tgl + 1209000;
		$total = date("Y-m-d H:i:s",$plus);
		$cc = $total;
		//$acc_tanggal = "SELECT CURRENT_TIMESTAMP() + 1209000";
		//$convert = date('Y-m-d', $acc_tanggal);


		//var_dump($acc_tanggal);

		$query_terima = "update tb_lowongan set status = '".$sts_terima."', exp = '".$cc."' where id_lowongan = '".$id_lowongan."' ";
		$resultTerima = mysqli_query($conn,$query_terima);

		if ($resultTerima) {
			# code...
			echo "<script>alert('Lowongan diterima.')</script>";
			header("Location:../data_lowongan.php");
		}else {
			//echo "ada yang error";
			var_dump($resultTerima);
			
		}

	}
	if (isset($_POST['tolak'])) {
		# code...
		$id_lamaran = $_GET['GetID'];
		$sts_tolak = $_POST['status_tolak'];

		$query_tolak = "update tb_lamaran set status_lamaran = '".$sts_tolak."' where id_lamaran = '".$id_lamaran."' ";
		$resultTolak = mysqli_query($conn, $query_tolak);

		if ($resultTolak) {
			# code...
			echo "<script>alert('Siswa ditolak.')</script>";
			header("Location:../view/lihat_lamaran_bos.php");
		}else {
			//echo "ada yang error";
			var_dump($resultTolak);
		
		}

	}
	?>