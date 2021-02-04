<?php include "koneksi.php"; ?>
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
        <li class="nav-item active">
            <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="list_gereja.php">List Gereja Katolik</a>
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

    <!-- Bagian css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/ilmudetil.css">
    
    <!-- Bagian js -->
    <script src='assets/js/jquery-1.10.1.min.js'></script>       
    
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- akhir dari Bagian js -->
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    
    <script>
        
    var marker;
      function initialize() {
          
        // Variabel untuk menyimpan informasi (desc)
        var infoWindow = new google.maps.InfoWindow;
        
        //  Variabel untuk menyimpan peta Roadmap
        var mapOptions = {
          mapTypeId: google.maps.MapTypeId.ROADMAP
        } 
        
        // Pembuatan petanya
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
              
        // Variabel untuk menyimpan batas kordinat
        var bounds = new google.maps.LatLngBounds();

        // Pengambilan data dari database
        <?php
            $query = mysqli_query($conn,"select * from gereja_katolik_makassar");
            while ($data = mysqli_fetch_array($query))
            {
                $namagereja = $data['namagereja'];
                $latitude = $data['latitude'];
                $longtitude = $data['longtitude'];
                
                echo ("addMarker($latitude, $longtitude, '$namagereja');\n");                        
            }
          ?>
          
        // Proses membuat marker 
        function addMarker(lat, lng, info) {
            var lokasi = new google.maps.LatLng(lat, lng);
            bounds.extend(lokasi);
            var marker = new google.maps.Marker({
                map: map,
                position: lokasi
                
            });       
            map.fitBounds(bounds);
            bindInfoWindow(marker, map, infoWindow, info);
         }
        
        // Menampilkan informasi pada masing-masing marker yang diklik
        function bindInfoWindow(marker, map, infoWindow, html) {
          google.maps.event.addListener(marker, 'click', function() {
            for(var i=1; i<=10; i++){
                            if(html == ("Gereja Kristus Raja - Andalas")){
                                var contentString=
                                '<br><a href="andalas.html">Lihat info Gereja Andalas</a>';
                            }
                            else if(html == ("Gereja Katolik St. Yoseph Pekerja Gotong Gotong")){
                                var contentString=
                                '<br><a href="gotong.html">Lihat info Gereja Gotong</a>';
                            }
                            else if(html == ("Gereja Katolik Maria Ratu Rosari, Kare")){
                                var contentString=
                                '<br><a href="kare.html">Lihat info Gereja Kare</a>';
                            }
                            else if(html == ("Gereja Katolik Hati Yesus Yang Mahakudus - Paroki Katedral")){
                                var contentString=
                                '<br><a href="katedral.html">Lihat info Gereja Katedral</a>';
                            }
                            else if(html == ("Gereja St. Perawan Maria Diangkat Ke Surga - Mamajang")){
                                var contentString=
                                '<br><a href="mamajang.html">Lihat info Gereja Mamajang</a>';
                            }
                            else if(html == ("Gereja Katolik Santo Yakobus, Mariso")){
                                var contentString=
                                '<br><a href="mariso.html">Lihat info Gereja Mariso</a>';
                            }
                            else if(html == ("Gereja Santo Fransiskus Assisi Makassar")){
                                var contentString=
                                '<br><a href="asisi.html">Lihat info Gereja Asisi</a>';
                            }
                            else if(html == ("Gereja St. Paulus - Tello")){
                                var contentString=
                                '<br><a href="tello.html">Lihat info Gereja Tello</a>';
                            }
                            else if(html == ("Gereja Katolik Paroki Maria Rosa Mystica Sudiang")){
                                var contentString=
                                '<br><a href="sudiang.html">Lihat info Gereja Sudiang</a>';
                            }
                            else if(html == ("Gereja Katolik St.Albertus Agung")){
                                var contentString=
                                '<br><a href="tanjung.html">Lihat info Gereja Tanjung</a>';
                            }
                            infoWindow.setContent(html + contentString);
           
                        }
                        
                    infoWindow.open(map, marker);
            
          });
        }
 
        }
      google.maps.event.addDomListener(window, 'load', initialize);
    
    </script>
    
</head>
<body onload="initialize()">


<!--- Bagian Judul-->   


                        <div id="map-canvas" style="width: 100%; height: 600px;"></div>
                    
 
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