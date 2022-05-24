<?php
   require_once("koneksi.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];
   $confirm_pass = $_POST['confirm_password'];
   $nama_depan = $_POST['nama_depan'];
   $nama_belakang = $_POST['nama_belakang'];
   $tanggal_lahir = $_POST['tanggal_lahir'];
   $jenis_kelamin = $_POST['jenis_kelamin'];
   $nomor_telepon = $_POST['nomor_telepon'];
   $sql = "SELECT * FROM data_akun WHERE username = '$username'";
   $query = $db->query($sql);
   if($query->num_rows != 0) {
     echo "<div align='center'>Username Sudah Terdaftar! <a href='Form Regis.php'>Back</a></div>";
   } else {
     if(!$username || !$pass) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='Form Regis.php'>Back</a>";
     } 
     else if($pass != $confirm_pass){
      echo "<div align='center'>Password Tidak Sama! <a href='Form Regis.php'>Back</a>";
     }
     else {
       $data = "INSERT INTO data_akun (Nama_Depan, Nama_Belakang, Jenis_Kelamin, No_Telepon ,  Tanggal_Lahir , 
                                        username , password ) 
       VALUES ('$nama_depan', '$nama_belakang', '$jenis_kelamin', '$nomor_telepon' , '$tanggal_lahir' , '$username' , '$pass')";
       $simpan = $db->query($data);
       if($simpan) {
         echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='Form Login.php'>Login</a></div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
?>