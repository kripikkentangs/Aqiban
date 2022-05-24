<?php
   session_start();
   require_once("koneksi.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];   
   $sql = "SELECT * FROM data_akun WHERE username = '$username'";
   $query = $db->query($sql);
   $hasil = $query->fetch_assoc();
   
   if($query->num_rows == 0) {
     echo "<div align='center'>Username Belum Terdaftar! <a href='Form login.php'>Back</a></div>";
   } else {
     if($pass <> $hasil['password']) {
       echo "<div align='center'>Password salah! <a href='Form login.php'>Back</a></div>";
     } else {
       $_SESSION['username'] = $hasil['username'];
       echo '<script language="javascript">alert("Selamat datang di Aqiban"); document.location="aqiban.php";</script>';
       header('location:index.php');
     }
   }
?>

