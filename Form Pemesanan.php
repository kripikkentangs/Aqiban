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
<form action="prosespesan.php" method="post">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <link rel="icon" type="image/png" href="goat.png">
    <title>Form Pemesanan</title>

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
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Form Pemesanan</h2>
                    <form method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nama Depan</label>
                                    <input class="input--style-4" type="text" name="nama_depan">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nama Belakang</label>
                                    <input class="input--style-4" type="text" name="nama_belakang">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nomor Telepon</label>
                                    <input class="input--style-4" type="text" name="nomor_telepon">
                                </div>
                            </div>
                          
                       
                        </div>
                        
                        <div class="input-group">
                            <label class="label">Alamat Lengkap</label>
                                <input class="input--style-4" type="text" name="alamat">
                        

                        <div class="col-2">
                        <div class="input-group">
                            <label class="label">Pilih Paket</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="paket">
                                    <option disabled="disabled" selected="selected">------Menu------</option> <br>
                                    <option>K.Jantan - Paket A</option> <br>
                                    <option>K.Jantan - Paket B</option><br>
                                    <option>K.Jantan - Paket C </option><br>
                                    <option>K.Jantan - Paket D </option><br>
                                    <option>K.Jantan - Paket E </option><br>
                                    <option>K.Jantan - Paket Special</option><br>
                                    <option>K.BETINA - Paket A</option><br>
                                    <option>K.BETINA - Paket B</option><br>
                                    <option>K.BETINA - Paket C </option><br>
                                    <option>K.BETINA - Paket D </option><br>
                                    <option>K.BETINA - Paket E </option><br>
                                    <option>K.BETINA - Paket Special</option><br>
                                    <option>NASI BOX - Paket A</option><br>
                                    <option>NASI BOX - Paket B</option><br>
                                    <option>NASI BOX - Paket C </option><br>
                                    <option>NASI BOX - Paket D </option><br>
                                    <option>NASI BOX - Paket E </option><br>
                                    <option>NASI BOX - Paket Special</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        </div>
                    </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Pesan</button>
                        </div>
                        <p>Kami Akan Menghubungi Anda dalam 1x24 Jam</p>
                     
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        </div>
            <footer id="myFooter">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <img id="MUI" src="Logo_MUI.png" width="200" height="200">
                        </div>
                     
                        <div class="col-sm-2">
                            <h3 id="aboutus1">About Us</h3>
                            <p id="aboutus">Aqiban merupakan tempat dimana Anda bisa membeli kebutuhan untuk melaksanakan Aqiqah atau Qurban , Anda tidak perlu mengolah dan membuat masakan untuk Aqiqah atau Qurban,Anda cukup menunggu dirumah saja dan kami akan mengantarkan pesanan kerumah anda SEJABODETABEK.</p>
      
                        </div>
                     
                        <div class="col-sm-3">
                            <div class="social-networks">
                                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                           <h3>Hubungi Kami</h3>
                           <h4></p>083815718369</h4>
                    </div>
                </div>
            </footer>

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