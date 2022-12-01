<!DOCTYPE html>
<html>
<head>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


  	<link rel="stylesheet" type="text/css" href="../css/style.css">

	<link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@300;400;700&display=swap" rel="stylesheet">

	<title>Pengaduan Layanan Masyarakat</title>
</head>

<body style="margin-top:-19px;">
<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
  <div class="shadow p-1 mb-3 bg-white rounded">
    <nav class="navbar bg-white fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="../img/perisai.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
          Security24
        </a>
        <a class="logout" style="margin-right:90px; text-decoration:none; color:red; font-size:20px; font-weight:300;" href="../logout.php">
          LOGOUT
        </a>
      </div>
    </nav>
  </div>
  <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>

<div class="container">
	<div class="sidebar">
  <header style="color: black;"><?= $_SESSION['username'] ?></header>
  <ul>
    <li><a href="dashboard_guru.php">Dashboard</a></li>
    <li><a href="laporan.php">Laporan</a></li>
  </ul>
  </div>

  <div class="content">
  <div class="col-sm-9">
    <div class="card">
      <div class="card-body">
        <h5 style="color: black;" class="card-title">Halo, <b><?= $_SESSION['username'] ?></b>!</h5>
        <p style="color: black;" class="card-text">Selamat Datang di halaman dashboard.<br><br></p>
      </div>
    </div>
  </div>
  </div>


</div>







  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>