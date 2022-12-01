<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['nik']);
unset($_SESSION['role']);

session_destroy();
echo "<script>alert('Anda telah Logout');document.location='login.php'</script>";