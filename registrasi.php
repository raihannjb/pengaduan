<!DOCTYPE html>
<html>
<head>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


  	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@300;400;700&display=swap" rel="stylesheet">

	<title>Pengaduan Layanan Masyarakat</title>
</head>

<body style="margin-top:40px;">
  <div class="shadow p-1 mb-3 bg-white rounded">
    <nav class="navbar bg-white fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="img/perisai.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
          Security24
        </a>
        <a class="deeznaf" href="index.php">Home</a>
      </div>
    </nav>
  </div>
  <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<script>alert('Mff, Login Gagal, Username dan Password anda Salah!'); document.location='index.php'</script>";
		}
	}
	?>
<div class="container">
	FORM REGISTRASI 
	<br>
    <div style="margin-left:4.8%; margin-top:2%" class="card">
      <div style="text-align: left;" class="card-body">


        <div class="mb-3 row" style="font-size: 20px; font-weight:300; letter-spacing:0px;">
            <label for="nik" class="col-sm-2 col-form-label">NIK</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nik" name="nik" value="<?php echo $nik ?>">
            </div>
          </div>


          <div class="mb-3 row" style="font-size: 20px; font-weight:300; letter-spacing:0px;">
            <label for="nik" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nik" name="nik" value="<?php echo $nik ?>">
            </div>
          </div>


          <div class="mb-3 row" style="font-size: 20px; font-weight:300; letter-spacing:0px;">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="username" name="username" value="<?php echo $username ?>">
            </div>
          </div>

          <div class="mb-3 row" style="font-size: 20px; font-weight:300; letter-spacing:0px;">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="password" name="password" value="<?php echo $password ?>">
            </div>
          </div>


          <div class="mb-3 row" style="font-size: 20px; font-weight:300; letter-spacing:0px;">
            <label for="notelp" class="col-sm-2 col-form-label">No.Telp</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="notelp" name="notelp" value="<?php echo $notelp ?>">
            </div>
          </div>
            <div class="col-12">
          <input type="simpan" name="simpan" value="Simpan" style="font-weight:700; font-size:18px; margin-left:90%;" class="btn-login"/>
          </div>



    </div>
    </div>
</div>







  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>