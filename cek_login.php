<?php 
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];


$login = mysqli_query($koneksi,"select * from users where username='$username' and password='$password'");

$cek = mysqli_num_rows($login);

if($cek > 0)

    $data = mysqli_fetch_assoc($login);

    if($data['level']=="Admin"){
        
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "Admin";
        header("location:admin/dashboard_admin.php");

    }else if($data['level']=="Petugas"){
        $_SESSION['nama'] = $nama;
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "Petugas";
        header("location:petugas/dashboard_petugas.php");

    }else if($data['level']=="Masyarakat"){
        $_SESSION['nama'] = $nama;
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "Masyarakat";
        header("location:masyarakat/dashboard_masyarakat.php");

    }else {
        header("location:index.php?pesan=gagal");
        }   



?>