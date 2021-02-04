<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>Sistem Informasi Gereja Katolik</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body style="background-color:rgb(213, 250, 255);">

<header>
  <img src="logo.jpg" class="float-left" alt="Responsive image" width="240" height="240">
  <img src="gereja.png" class="float-right" alt="Responsive image" width="240" height="240">
	<div class="jumbotron text-center bg-primary">
		<div class="container">
			<div class="row">
				<div class="col">
          <h1><p class="text-white">Selamat Datang di Website Sistem Informasi Geografis</p></h1>
          <div class="lead"><p class="text-black font-weight-bold">Gereja Katolik Makassar</p></div>
          <!--<img src="logo.jpg" class="img-fluid-left img-thumbnail" alt="Responsive image">-->
        </div>
      </div>
		</div>
	</div>
</header>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
<a class="navbar-brand" href="landingpage.html">SIG Gereja Katolik Makassar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="home.php">Home </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="list_gereja.php">List Gereja Katolik<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Tentang
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="sejarah.html">Sejarah Gereja Katolik Roma</a>
            <a class="dropdown-item" href="tentang.html">Tentang Web</a>

            
          </div>
        </li>
        <!--<li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Link Mati</a>
      </li>  -->
    </ul>

    <div class="dropdown col-form-label-lg">
      <script src="dropdown.js"></script>
      <link href="dropdown.css" rel="stylesheet" type="text/css">
      <button onclick="myFunction()" class="dropbtn">Cari</button>
      <div id="myDropdown" class="dropdown-content">
        <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
        <a href="andalas.html">Gereja Andalas</a>
        <a href="asisi.html">Gereja Asisi</a>
        <a href="gotong.html">Gereja Gotong-Gotong</a>
        <a href="kare.html">Gereja Kare</a>
        <a href="katedral.html">Gereja Katedral</a>
        <a href="mamajang.html">Gereja Mamajang</a>
        <a href="mariso.html">Gereja Mariso</a>
        <a href="sudiang.html">Gereja Sudiang</a>
        <a href="tanjung.html">Gereja Tanjung</a>
        <a href="tello.html">Gereja Tello</a>
      </div>
    </div>
    
  </div>
</nav>

<table class="table table-bordered table-primary table-striped">
            <tbody>
	    
		        <tr>
                    <th><b>Nomor</b></th>
			              <th><b>Nama Gereja</b></th>
			              <th>Alamat</b></th>
                    <th><b>Jadwal Misa</b></th>
                    <th><b>Pastor Paroki</b></th>
                    <th><b>Telepon</b></th>
                    <th><b>Web</b></th>
                    <th><b>Latitude</b></th>
                    <th><b>Longtitude</b></th>
                    <th><b>Informasi</b></th>
                </tr>
                
                <?php 
		            include 'koneksilist.php';
		            $data = mysqli_query($koneksi,"select * from gereja_katolik_makassar where nomor='1'");
		            while($d = mysqli_fetch_array($data)){
			    ?>
			        <tr>
                        <td><?php echo $d['nomor']; ?></td>
				                <td><?php echo $d['namagereja']; ?></td>
                        <td><?php echo $d['alamat']; ?></td>
                        <td><?php echo $d['jadwalmisa']; ?></td>
                        <td><?php echo $d['pastorparoki']; ?></td>
                        <td><?php echo $d['telepon']; ?></td>
                        <td><?php echo $d['web']; ?></td>
                        <td><?php echo $d['latitude']; ?></td>
                        <td><?php echo $d['longtitude']; ?></td>
                        <td><a class ="nav-link" href="andalas.html">Andalas</a></td>
			        </tr>
			    <?php 
		        }
                ?>

          <?php 
		            include 'koneksilist.php';
		            $data = mysqli_query($koneksi,"select * from gereja_katolik_makassar where nomor='2'");
		            while($d = mysqli_fetch_array($data)){
			    ?>
			        <tr>
                        <td><?php echo $d['nomor']; ?></td>
				                <td><?php echo $d['namagereja']; ?></td>
                        <td><?php echo $d['alamat']; ?></td>
                        <td><?php echo $d['jadwalmisa']; ?></td>
                        <td><?php echo $d['pastorparoki']; ?></td>
                        <td><?php echo $d['telepon']; ?></td>
                        <td><?php echo $d['web']; ?></td>
                        <td><?php echo $d['latitude']; ?></td>
                        <td><?php echo $d['longtitude']; ?></td>
                        <td><a class ="nav-link" href="gotong.html">Gotong-Gotong</a></td>
			        </tr>
			    <?php 
		        }
                ?>
                
                <?php 
		            include 'koneksilist.php';
		            $data = mysqli_query($koneksi,"select * from gereja_katolik_makassar where nomor='3'");
		            while($d = mysqli_fetch_array($data)){
			    ?>
			        <tr>
                        <td><?php echo $d['nomor']; ?></td>
				                <td><?php echo $d['namagereja']; ?></td>
                        <td><?php echo $d['alamat']; ?></td>
                        <td><?php echo $d['jadwalmisa']; ?></td>
                        <td><?php echo $d['pastorparoki']; ?></td>
                        <td><?php echo $d['telepon']; ?></td>
                        <td><?php echo $d['web']; ?></td>
                        <td><?php echo $d['latitude']; ?></td>
                        <td><?php echo $d['longtitude']; ?></td>
                        <td><a class ="nav-link" href="kare.html">Kare</a></td>
			        </tr>
			    <?php 
		        }
                ?>

<?php 
		            include 'koneksilist.php';
		            $data = mysqli_query($koneksi,"select * from gereja_katolik_makassar where nomor='4'");
		            while($d = mysqli_fetch_array($data)){
			    ?>
			        <tr>
                        <td><?php echo $d['nomor']; ?></td>
				                <td><?php echo $d['namagereja']; ?></td>
                        <td><?php echo $d['alamat']; ?></td>
                        <td><?php echo $d['jadwalmisa']; ?></td>
                        <td><?php echo $d['pastorparoki']; ?></td>
                        <td><?php echo $d['telepon']; ?></td>
                        <td><?php echo $d['web']; ?></td>
                        <td><?php echo $d['latitude']; ?></td>
                        <td><?php echo $d['longtitude']; ?></td>
                        <td><a class ="nav-link" href="katedral.html">Katedral</a></td>
			        </tr>
			    <?php 
		        }
                ?>

<?php 
		            include 'koneksilist.php';
		            $data = mysqli_query($koneksi,"select * from gereja_katolik_makassar where nomor='5'");
		            while($d = mysqli_fetch_array($data)){
			    ?>
			        <tr>
                        <td><?php echo $d['nomor']; ?></td>
				                <td><?php echo $d['namagereja']; ?></td>
                        <td><?php echo $d['alamat']; ?></td>
                        <td><?php echo $d['jadwalmisa']; ?></td>
                        <td><?php echo $d['pastorparoki']; ?></td>
                        <td><?php echo $d['telepon']; ?></td>
                        <td><?php echo $d['web']; ?></td>
                        <td><?php echo $d['latitude']; ?></td>
                        <td><?php echo $d['longtitude']; ?></td>
                        <td><a class ="nav-link" href="mamajang.html">Mamajang</a></td>
			        </tr>
			    <?php 
		        }
                ?>  

<?php 
		            include 'koneksilist.php';
		            $data = mysqli_query($koneksi,"select * from gereja_katolik_makassar where nomor='6'");
		            while($d = mysqli_fetch_array($data)){
			    ?>
			        <tr>
                        <td><?php echo $d['nomor']; ?></td>
				                <td><?php echo $d['namagereja']; ?></td>
                        <td><?php echo $d['alamat']; ?></td>
                        <td><?php echo $d['jadwalmisa']; ?></td>
                        <td><?php echo $d['pastorparoki']; ?></td>
                        <td><?php echo $d['telepon']; ?></td>
                        <td><?php echo $d['web']; ?></td>
                        <td><?php echo $d['latitude']; ?></td>
                        <td><?php echo $d['longtitude']; ?></td>
                        <td><a class ="nav-link" href="mariso.html">Mariso</a></td>
			        </tr>
			    <?php 
		        }
                ?>

<?php 
		            include 'koneksilist.php';
		            $data = mysqli_query($koneksi,"select * from gereja_katolik_makassar where nomor='7'");
		            while($d = mysqli_fetch_array($data)){
			    ?>
			        <tr>
                        <td><?php echo $d['nomor']; ?></td>
				                <td><?php echo $d['namagereja']; ?></td>
                        <td><?php echo $d['alamat']; ?></td>
                        <td><?php echo $d['jadwalmisa']; ?></td>
                        <td><?php echo $d['pastorparoki']; ?></td>
                        <td><?php echo $d['telepon']; ?></td>
                        <td><?php echo $d['web']; ?></td>
                        <td><?php echo $d['latitude']; ?></td>
                        <td><?php echo $d['longtitude']; ?></td>
                        <td><a class ="nav-link" href="asisi.html">Asisi</a></td>
			        </tr>
			    <?php 
		        }
                ?>

<?php 
		            include 'koneksilist.php';
		            $data = mysqli_query($koneksi,"select * from gereja_katolik_makassar where nomor='8'");
		            while($d = mysqli_fetch_array($data)){
			    ?>
			        <tr>
                        <td><?php echo $d['nomor']; ?></td>
				                <td><?php echo $d['namagereja']; ?></td>
                        <td><?php echo $d['alamat']; ?></td>
                        <td><?php echo $d['jadwalmisa']; ?></td>
                        <td><?php echo $d['pastorparoki']; ?></td>
                        <td><?php echo $d['telepon']; ?></td>
                        <td><?php echo $d['web']; ?></td>
                        <td><?php echo $d['latitude']; ?></td>
                        <td><?php echo $d['longtitude']; ?></td>
                        <td><a class ="nav-link" href="tello.html">Tello</a></td>
			        </tr>
			    <?php 
		        }
                ?>

<?php 
		            include 'koneksilist.php';
		            $data = mysqli_query($koneksi,"select * from gereja_katolik_makassar where nomor='9'");
		            while($d = mysqli_fetch_array($data)){
			    ?>
			        <tr>
                        <td><?php echo $d['nomor']; ?></td>
				                <td><?php echo $d['namagereja']; ?></td>
                        <td><?php echo $d['alamat']; ?></td>
                        <td><?php echo $d['jadwalmisa']; ?></td>
                        <td><?php echo $d['pastorparoki']; ?></td>
                        <td><?php echo $d['telepon']; ?></td>
                        <td><?php echo $d['web']; ?></td>
                        <td><?php echo $d['latitude']; ?></td>
                        <td><?php echo $d['longtitude']; ?></td>
                        <td><a class ="nav-link" href="sudiang.html">Sudiang</a></td>
			        </tr>
			    <?php 
		        }
                ?>

<?php 
		            include 'koneksilist.php';
		            $data = mysqli_query($koneksi,"select * from gereja_katolik_makassar where nomor='10'");
		            while($d = mysqli_fetch_array($data)){
			    ?>
			        <tr>
                        <td><?php echo $d['nomor']; ?></td>
				                <td><?php echo $d['namagereja']; ?></td>
                        <td><?php echo $d['alamat']; ?></td>
                        <td><?php echo $d['jadwalmisa']; ?></td>
                        <td><?php echo $d['pastorparoki']; ?></td>
                        <td><?php echo $d['telepon']; ?></td>
                        <td><?php echo $d['web']; ?></td>
                        <td><?php echo $d['latitude']; ?></td>
                        <td><?php echo $d['longtitude']; ?></td>
                        <td><a class ="nav-link" href="tanjung.html">Tanjung</a></td>
			        </tr>
			    <?php 
		        }
                ?>

            </tbody>
            </table>

<div id="peta"></div>
<nav class="navbar navbar-expand-sm bg-primary justify-content-center">
  <img src="logo.jpg" alt="Logo" style="width:40px;">
    <b>© 2021 COPYRIGHT SHEREEN BEATRIX ADHIWIDJAJA (1861022)</b>
</nav>
 <Link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
<script src="js/bootstrap.min.js"></script>
</body>
</html>