
<?php 
include 'php/koneksi.php';

	session_start();
	require ('header_admin.php'); 


	if (!isset($_SESSION['id_admin'])) {
    	header("Location: login_admin.php");
	}

	$id_lowongan = $_GET['GetID'];


	$query = mysqli_query($conn, "SELECT * FROM tb_lowongan WHERE id_lowongan = '".$id_lowongan."'");
	while ($row=mysqli_fetch_assoc($query)) {
		$id_lowongan_baru = $row['id_lowongan'];
		$judul = $row['judul'];
		$jurusan = $row['jurusan'];
		$detail = $row['detail'];
		$alamat = $row['alamat'];
		$bukti_tf = $row['bukti_transfer'];
		$tanggal = date("j F, Y",strtotime($row['tanggal']));
		$tanggal2 = date($row['tanggal']);
		$tanggal3 = $row['tanggal'];
		$status = $row['status'];	
	}
?>

<!--inner block start here-->
<div class="inner-block">
	<table>
		<tr>
			<td>Judul </td>
			<td>:</td>
			<td><?php echo $judul ?></td>
		</tr>
		<tr>
			<td>Jurusan</td>
			<td>:</td>
			<td><?php echo $jurusan; ?></td>
		</tr>
		<tr>
			<td>Detail</td>
			<td>:</td>
			<td><?php echo $detail; ?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><?php echo $alamat; ?></td>
		</tr>
		<tr>
			<td>Tanggal</td>
			<td>:</td>
			<td><?php echo $tanggal; ?></td>
		</tr>
		<tr>
			<td>Bukti Transfer</td>
			<td>:</td>
			<td><a href="../../asset/document/<?= $bukti_tf; ?>"><?= $bukti_tf; ?></a></td>
		</tr>
		<tr>
			<td>Status</td>
			<td>:</td>
			<td><?php echo $status; ?></td>
		</tr>
		
	</table>
	<input type="hidden" name="id_lowongan" value="<?php echo $id_lowongan_hidden ?>">

	<br>
	

						
	<a href="data_lowongan.php" style="text-decoration: none; list-style: none;"><button name="back" class="btn">back</button></a>
	<form action="php/proses_status_lowongan.php?GetID=<?php echo $id_lowongan_baru ?>" method="POST">

		<input type="hidden" name="tanggal" value="<?php echo $tanggal3 ?>">

		<input type="hidden" name="status_terima" value="2">
		<input type="hidden" name="status_tolak" value="3">
		
		<button name="tolak" class="btn">Tolak Lowongan</button>
		<button name="terima" class="btn">Terima Lowongan</button>
	</form>

</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
<?php require('slider_menu_admin.php'); ?>
