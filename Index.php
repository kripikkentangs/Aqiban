<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:Form login.php');
   echo "Database Terhubung";
} else { 
   $username = $_SESSION['username']; 
}

?>

<title>Halaman Sukses Login</title>
<div align='center'>
   Anda Telah Login Sebagai <b><?php echo $username;?></b> <a href="Logout.php"><b>|| Logout ||</b></a>
   <a href="Aqiban.php"><b>||Halaman Utama||</b></a>
</div>

