<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
	include 'php/koneksi.php';

	session_start();

	if (!isset($_SESSION['id_admin'])) {
    	header("Location: login_admin.php");
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Data Siswa</title>
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
<!--static chart-->
<script src="js/Chart.min.js"></script>
<!--//charts-->
<!-- geo chart -->
    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
     <!-- Chartinator  -->
    <script src="js/chartinator.js" ></script>
    <script type="text/javascript">
        jQuery(function ($) {

            var chart3 = $('#geoChart').chartinator({
                tableSel: '.geoChart',

                columns: [{role: 'tooltip', type: 'string'}],
         
                colIndexes: [2],
             
                rows: [
                    ['China - 2015'],
                    ['Colombia - 2015'],
                    ['France - 2015'],
                    ['Italy - 2015'],
                    ['Japan - 2015'],
                    ['Kazakhstan - 2015'],
                    ['Mexico - 2015'],
                    ['Poland - 2015'],
                    ['Russia - 2015'],
                    ['Spain - 2015'],
                    ['Tanzania - 2015'],
                    ['Turkey - 2015']],
              
                ignoreCol: [2],
              
                chartType: 'GeoChart',
              
                chartAspectRatio: 1.5,
             
                chartZoom: 1.75,
             
                chartOffset: [-12,0],
             
                chartOptions: {
                  
                    width: null,
                 
                    backgroundColor: '#fff',
                 
                    datalessRegionColor: '#F5F5F5',
               
                    region: 'world',
                  
                    resolution: 'countries',
                 
                    legend: 'none',

                    colorAxis: {
                       
                        colors: ['#679CCA', '#337AB7']
                    },
                    tooltip: {
                     
                        trigger: 'focus',

                        isHtml: true
                    }
                }

               
            });                       
        });
    </script>
<!--geo chart-->

<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
									 <a href="index.php"> <h1>Cagang</h1> 
									<!--<img id="logo" src="" alt="Logo"/>--> 
								  </a> 								
							</div>
							<!--search-box-->
								<div class="search-box">
									<form>
										<input type="text" placeholder="Search..." required="">	
										<input type="submit" value="">					
									</form>
								</div><!--//end-search-box-->
							<div class="clearfix"> </div>
						 </div>
						<div class="profile_details">		
							<ul>
								<li class="dropdown profile_details_drop">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
										<div class="profile_img">	
											<span class="prfil-img"><img src="images/p1.png" alt=""> </span> 
											<div class="user-name">
												<p><?php echo $_SESSION['nama']; ?></p>
												<span>Administrator</span>
											</div>
											<i class="fa fa-angle-down lnr"></i>
											<i class="fa fa-angle-up lnr"></i>
											<div class="clearfix"></div>	
										</div>	
									</a>
									<ul class="dropdown-menu drp-mnu">
										<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
										<li> <a href="profile_admin.php"><i class="fa fa-user"></i> Profile</a> </li> 
										<li> <a href="php/logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
									</ul>
								</li>
							</ul>
						</div>
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
<!--market updates updates-->
	 
<!--mainpage chit-chating-->
<div class="chit-chat-layer1">
	<div class="col-md-12 chit-chat-layer1-left">
               <div class="work-progres">
                            <div class="chit-chat-heading">
                                  Data Siswa
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>Nama</th>
                                      <th>Jenis Kelamin</th>                                   
                                      <th>Jurusan</th>                                   
                                      <th>Sekolah</th>                                   
                                      <th>Alamat</th>                                   
                                      <th>NISN</th>                                   
                                      <th>Email</th>
                                      <th>Delete</th>                                   
                                  </tr>
                              </thead>
                              <tbody>
                              	<?php 
                              		$nomor = 1;	
									$get_data = mysqli_query($conn, "select * from user_siswa");
                              		while ($display=mysqli_fetch_array($get_data)){
										$id_siswa = $display['id_siswa'];
										$nama = $display['nama'];
										$jkelamin = $display['jenis_kelamin'];
										$jurusan = $display['jurusan'];
										$sekolah = $display['sekolah'];
										$alamat = $display['alamat'];
										$nisn = $display['nisn'];
										$email = $display['email'];
                              	?>
                              	 <tr>
                                 	<td><?php echo $nomor ?></td>
                                 	<td><?php echo $nama ?></td>
                                 	<td><?php echo $jkelamin ?></td>                                 
                                 	<td><?php echo $jurusan ?></td>                                 
                                 	<td><?php echo $sekolah ?></td>                                 
                                 	<td><?php echo $alamat ?></td>                                 
                                 	<td><?php echo $nisn ?></td>                                 
                                 	<td><?php echo $email ?></td>   
									<td><a href='php/delete_siswa.php?Del=<?php echo $id_siswa ?>'><input type='submit' value='Delete' id='editbtn'></a></td>

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




</div>

<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="index.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
		        <li><a href="#"><i class="fa fa-cogs"></i><span>Manajemen User</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul>
		            <li><a href="data_siswa.php">Siswa</a></li>
		            <li><a href="data_bos.php">Bos</a></li>		            		            
		          </ul>
		        </li>
		        <li><a href="#"><i class="fa fa-cogs"></i><span>Manajemen Data</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul>
	            	<li><a href="data_lowongan.php">Lowongan</a></li>
		            <li><a href="data_lamaran.php">Lamaran</a></li>		                 		            
		          </ul>
		        </li>	
		        
		      </ul>
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>                     