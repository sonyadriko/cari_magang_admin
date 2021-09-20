<?php 
	session_start();
	require 'header_admin.php';
?>

<!--inner block start here-->
<div class="inner-block">
<!--market updates updates-->
	 <div class="market-updates">
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-8 market-update-left">
						<h3>
							<?php
								$query_siswa = "SELECT COUNT(*) AS jumlah FROM user_siswa";
								$resultsiswa =  $conn->query($query_siswa);
								$hasil =mysqli_fetch_array($resultsiswa);

								echo "{$hasil['jumlah']}";
							?>

						</h3>
						<h4>Siswa Terdaftar</h4>
						<p>Other hand, we denounce</p>
					</div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-file-text-o"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-2">
				 <div class="col-md-8 market-update-left">
					<h3>
						<?php
								$query_bos = "SELECT COUNT(*) AS jumlah FROM user_bos";
								$resultbos =  $conn->query($query_bos);
								$hasil =mysqli_fetch_array($resultbos);

								echo "{$hasil['jumlah']}";
							?>
					</h3>
					<h4>perusahaan Terdaftar</h4>
					<p>Other hand, we denounce</p>
				  </div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-eye"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-3">
					<div class="col-md-8 market-update-left">
						<h3>
							<?php
								$query_lowongan = "SELECT COUNT(*) AS jumlah FROM tb_lowongan";
								$resultlowongan =  $conn->query($query_lowongan);
								$hasil =mysqli_fetch_array($resultlowongan);

								echo "{$hasil['jumlah']}";
							?>
						</h3>
						<h4>Lowongan Tersedia</h4>
						<p>Other hand, we denounce</p>
					</div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-envelope-o"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		   <div class="clearfix"> </div>
		</div>
		
<!--market updates end here-->
<!--mainpage chit-chating-->
<div class="chit-chat-layer1">
	<div class="col-md-6 chit-chat-layer1-left">
               <div class="work-progres">
                            <div class="chit-chat-heading">
                                  Lowongan Terbaru
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>Judul</th>
                                      <th>Jurusan</th>                                   
                                                                      
                                      <th>Kota</th>
                                      <th>Kuota</th>
                                  </tr>
                              </thead>
                              <tbody>
                              	<?php 
                              		$nomor = 1;	
									$get_data = mysqli_query($conn, "select * from tb_lowongan order by judul ");
                              		while ($display=mysqli_fetch_array($get_data)){
										$id_lowongan = $display['id_lowongan'];
										$judul = $display['judul'];
										$jurusan = $display['jurusan'];
										$kota = $display['kota'];
										$max = $display['kuota'];
                              	?>
                              	 <tr>
                                  <td><?php echo $nomor ?></td>
                                  <td><?php echo $judul ?></td>
                                  <td><?php echo $jurusan ?></td>                                 
                                                             
                                  <td><?php echo $kota ?></td>
                                  <td><?php echo $max ?></td>
                              </tr>
                              <?php
                              $nomor++;
                         	}
                       	?>	
                          </tbody>
                      </table>
                  </div>
             </div>
      </div>
      
     <div class="clearfix"> </div>
</div>
<!--main page chit chating end here-->

<!--<a href="tambah_lowongan.php"><button>tambah lowongan</button></a>-->


</div>

<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
	 
<?php require ('slider_menu_admin.php'); ?>