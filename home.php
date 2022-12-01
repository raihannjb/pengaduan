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
        <a class="deeznaf" href="">Home</a>
        <a class="deeznaf" href="">Pengaduan</a>
        <a class="deeznaf" href="">Cek Pengaduan</a>
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
	LOGIN 
	<br>
<img src="img/perisai.png" alt="" width="269" height="309">

</div>

    <div style="margin-top:10px; margin-left:45%;" class="position-absolute bottom-85 end-60">
      <button style="font-weight:700;" class="btn-home" type="submit">Mulai Login</button>
    </div>









  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>