<!doctype html> 
<html> 
<head> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="assets/css/bootstrap.css"> 
</head> 
<body> 
  
  <?php
  include "koneksi.php";
  $nomor  = $_REQUEST['nomor'];
  $nama  = $_REQUEST['nama'];
  $longtitude  = $_REQUEST['longtitude'];
  $latitude  = $_REQUEST['latitude'];
  $mysqli  = "INSERT INTO lokasi (nomor, nama, latitude, longtitude) VALUES ('$nomor','$nama', '$latitude','$longtitude')";
  $result  = mysqli_query($conn, $mysqli);

  if ($result) {
    echo "Input berhasil";
  } else {
    echo "Input gagal";
  }

  mysqli_close($conn);
?>

  <script src="assets/js/jquery.js"></script> 
  <script src="assets/js/popper.js"></script> 
  <script src="assets/js/bootstrap.js"></script>

</body> 
</html>