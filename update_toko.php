<?php
	include "ceksesi.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset="utf-8">
    <title>Pulsa Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
	
	<style type="text/css">
		#map img { 
		  max-width: none;
		}

		#map label { 
		  width: auto; display:inline; 
		}	
    </style>
	
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
	
	<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Pulsa Admin</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="paneladmin.php">Home</a></li>
			  <li class="active"><a href="logout.php">Logout</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->

      <!-- Example row of columns -->
      <div class="hero-unit">
		<div class='row'>
		<div class="span8">
			<h4>Peta Lokasi</h4><br/>
			<div id="map" style="width: 650px; height: 300px;"></div><br/>
			<script type="text/javascript">
				var locations = [
					<?php
						include "koneksi.php";
						
						$id = $_GET['id'];
						$tampil = "SELECT * FROM data_toko WHERE id_toko='$id';";
						$qtampil = mysql_query($tampil) or die(mysql_error());
						while($data = mysql_fetch_object($qtampil)){
							//var_dump($data);
					?>
							['<?php echo $data->nama_toko;?>', <?php echo $data->latitude_toko;?>, <?php echo $data->longitude_toko;?>],
					<?php
						}
					?>
					
				
				];

				var map = new google.maps.Map(document.getElementById('map'), {
					zoom: 12,
					center: new google.maps.LatLng(-6.9810485, 110.4084975),
					mapTypeId: google.maps.MapTypeId.ROADMAP
				});

				var infowindow = new google.maps.InfoWindow();

				var marker, i;

				for (i = 0; i < locations.length; i++) {  
					marker = new google.maps.Marker({
						position: new google.maps.LatLng(locations[i][1], locations[i][2]),
						map: map,
						draggable : true
					});
					
					/*
					google.maps.event.addListener(marker, 'click', (function(marker, i) {
						return function() {
						  infowindow.setContent(locations[i][0]);
						  infowindow.open(map, marker);
						}
					})(marker, i));
					*/
				}
				
				function updateMarkerPosition(latLng) {
					document.getElementById('lat').value = [latLng.lat()];
					document.getElementById('lng').value = [latLng.lng()];
				}
				
				/*
				var marker1 = new google.maps.Marker({
					position : new google.maps.LatLng(-7.791446,110.366909),
					title : 'lokasi',
					map : map,
					draggable : true
				});
				*/
				
				//updateMarkerPosition(latLng);

				google.maps.event.addListener(marker, 'drag', function() {
					updateMarkerPosition(marker.getPosition());
				});
			  </script>
		</div>
		
		<div class="span8">
			<?php
				include "koneksi.php";
				
				$idt = $_GET['id'];
				$query = "SELECT * FROM data_toko WHERE id_toko='$idt';";
				$qtoko = mysql_query($query);
				$hasil = mysql_fetch_array($qtoko);
				
				$nama = $hasil['nama_toko'];
				$alamat = $hasil['alamat_toko'];
				$latitude = $hasil['latitude_toko'];
				$longitude = $hasil['longitude_toko'];
			?>
			<br/><br/>
			<h4>Data Lokasi Toko Pulsa</h4><br/>
			<form action="aksi_update_toko.php" method="POST">
			<center>
			<table border="0" cellspacing="40">
				<tr>
					<td><b>Nama Toko</b></td>
					<td>:</td>
					<td>
						<input name="nama" type="text" id="nama" class='input-xlarge' required="required" value="<?php echo $nama; ?>" />
						<input type="hidden" name="idtoko" value="<?php echo $idt; ?>" />
					</td>
				</tr>
				<tr>
					<td><b>Alamat Toko</b></td>
					<td>:</td>
					<td><input name="alamat" type="text" id="alamat" class='input-xlarge' required="required" value="<?php echo $alamat; ?>" /></td>
				</tr>
				<tr>
					<td><b>Latitude</b></td>
					<td>:</td>
					<td><input name="lat" type="text" id="lat" class='input-xlarge' required="required" value="<?php echo $latitude; ?>" /></td>
				</tr>
				<tr>
					<td><b>Longitude</b></td>
					<td>:</td>
					<td><input type="text" name="long" id="lng" class='input-xlarge' required="required" value="<?php echo $longitude; ?>" /></td>
				</tr>
				<tr>
					<td colspan="3">
						<center>
						<input type="submit" name="submit" value="Update" class="btn btn-primary btn-large"/>
						<input type="reset" name="reset" value="Reset" class="btn btn-large"/>
						</center>
					</td>
				</tr>
			</table>
			</center>
			</form>
		</div>
		</div>
      </div>
	  

      <hr>

      <footer>
        <p>Copyright &copy; ERA IMP 2014</p>
      </footer>

    </div> <!-- /container -->
	<!--javascript here-->
	

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>

  </body>
</html>
