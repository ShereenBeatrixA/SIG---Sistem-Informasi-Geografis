<html>
<head>
<title>Input Lokasi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

    <header>
        <div class="jumbotron text-left">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="text-body">Input Lokasi</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <div class="container">		
  <form method="post" action="proses.php">
            <div class="form-group row">
                <label for="nomor" class="col-sm-2 col-form-label">Nomor:</label>
                <div class="col-sm-10">
                <input type="nomor" class="form-control-inline" id="nomor" placeholder="Masukkan Nomor" name="nomor">
                </div>
			</div>
			<div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama:</label>
                <div class="col-sm-10">
                <input type="nama" class="form-control-inline" id="nama" placeholder="Masukkan Nama" name="nama">
                </div>
			</div>
			<div class="form-group row">
                <label for="longtitude" class="col-sm-2 col-form-label">Longtitude:</label>
                <div class="col-sm-10">
                <input type="longtitude" class="form-control-inline" id="longtitude" placeholder="Masukkan Longtitude" name="longtitude">
            </div>	
        </div>
            <div class="form-group row">
                <label for="latitude" class="col-sm-2 col-form-label">Latitude:</label>
                <div class="col-sm-10">
                <input type="latitude" class="form-control-inline" id="Latitude" placeholder="Masukkan Latitude" name="latitude">
            </div>
        </div>			
        
    </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="submit" class="btn btn-secondary">Hapus</button>
            <button type="submit" class="btn btn-info">Lihat Data</button>
		</form>		
    </div>
    

<script src="js/bootstrap.min.js"></script>
</body>
</html>

