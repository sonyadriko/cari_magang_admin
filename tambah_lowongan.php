<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php include 'php/process_tambah_lowongan.php' ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Sign Up</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet">
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--//charts-->
</head>
<body>	
<!--inner block start here-->
<div class="signup-page-main">
     <div class="signup-main">  	
    	 <div class="signup-head">
				<h1>Buat Lowongan Baru</h1>
			</div>
			<div class="signup-block">
				<form action="tambah_lowongan.php" method="POST" enctype="multipart/form-data">
	
					<div class="form-group compose-right">
						<div class="btn btn-default btn-file">
							<i class="fa fa-paperclip"> </i> Poster
							<input type="file" name="foto">
						</div>
					</div>

					
					<input type="text" name="judul" placeholder="Judul" required>
					<input type="text" name="jurusan" placeholder="Jurusan" required>
					<input type="text" name="alamat" placeholder="Alamat" required>
					<input type="number" name="jumlah" placeholder="Jumlah pelamar yang dibutuhkan" required>
					<br>
					<br>
					<div class="form-group">
                    	<div class="input-group">
                        	<select class="form-control" name="addkota" id="addkota" required>
                          		<option>Kota</option>
                          		<option value="kediri">Kediri</option>
                          		<option value="Lamongan">Lamongan</option>
                          		<option value="Madiun">Madiun</option>
                          		<option value="Malang">Malang</option>
                          		<option value="Mojokerto">Mojokerto</option>
                          		<option value="Pasuruan">Pasuruan</option>
                          		<option value="Sidoarjo">Sidoarjo</option>
                          		<option value="Surabaya">Surabaya</option>
                        	</select>         
                    	</div>
                    </div>
					<div class="inbox-details-body">
						<textarea rows="6" name="detail" value="Detail :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Detail';}">Detail</textarea>
					</div>
					<br>	
					<input type="hidden" name="tanggal" value="<?php echo date("Y-m-d"); ?>">
				
					<input type="submit" name="submit" value="Buat lowongan">
																		
				</form>
				<div class="sign-down">
					
				</div>
			</div>
    </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>	
<!--COPY rights end here-->
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						
