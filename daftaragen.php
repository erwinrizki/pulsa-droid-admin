<?php
	include "ceksesi.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Pulsa Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
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
		<h3>Master Agen Pulsa</h3><br/><br/>
		<a href="inputdataagen.php" ><img src="images/add.png" /> Tambah Agen</a><br/><br/>
		<table class="table table-striped">
			<tr>
				<td><b>No</b></td>
				<td><b>Nama Agen</b></td>
				<td><b>Alamat Agen</b></td>
				<td><b>Nomer HP</b></td>
				<td><b>Aksi</b></td>
			</tr>
		<?php
			include "koneksi.php";
			
			$tampil = "SELECT * FROM data_agen";
			$querytampil = mysql_query($tampil);
			$i = 1;
			while($hasil = mysql_fetch_array($querytampil)) {
				$id = $hasil['id_agen'];
				$nama = $hasil['nama_agen'];
				$alamat = $hasil['alamat_agen'];
				$nomer = $hasil['nomer_hp'];
		?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $nama; ?></td>
					<td><?php echo $alamat; ?></td>
					<td><?php echo $nomer; ?></td>
					<td>
						<a href="update_agen.php?id=<?php echo $id; ?>"><img height="40" width="40" src="images/update.png"  title="Update" /></a>
						<a href="hapus_agen.php?id=<?php echo $id; ?>"><img height="40" width="40" src="images/delete.png"  title="Hapus" /></a>						
					</td>
				</tr>
		<?php
				$i++;
			}
		?>
		</table>
	  </div>

      <hr>

      <footer>
        <p>Copyright &copy; ERA IMP 2014</p>
      </footer>

    </div> <!-- /container -->

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
