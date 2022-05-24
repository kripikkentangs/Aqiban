<?php
   session_start();
   require_once("koneksi.php");
   if (empty($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<form action="prosespembayaran.php" method="post">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <link rel="icon" type="image/png" href="goat.png">
    <title>Form Pembayaran</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  

<style>
.topnav {
  overflow: hidden;
  background-color: #e9e9e9; }

  .topnav input[type=text] {
  float: right;
  padding: 6px;
  border: none;
  margin-top: 8px;
  margin-right: 16px;
  font-size: 17px; }

  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }

  .topnav input[type=text] {
    border: 1px solid #ccc;
  }

}


</style>


</head>

<body>
        <div class="Header">
                <p id="judul"> AqiBan </p>
                <p>Siap Memenuhi Kebutuhan Aqiqah dan Qurban Anda</p>
         </div>       
        
         <div>
        <ul>
        <li><a href="Aqiban.php">Menu</a></li>
    <li><a href="Aqiban-Harga.php">Harga</a></li>
    <li><a href="Form Pemesanan.php">Pesan</a></li>
    <li><a href="Form Pembayaran.php">Pembayaran</a></li>
    <li><a href="Aqiban-Testimonial.php">Testimonial</a></li>
    <li><a href="Form Login.php">Login</a></li></ul>
         </div>  

  <div class="topnav">
  <input type="text" placeholder="Masukan Nomor Telepon" name="nomor_telepon" >
</div>



    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->