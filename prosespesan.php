<?php
   require_once("koneksi.php");

   $nama_depan = $_POST['nama_depan'];
   $nama_belakang = $_POST['nama_belakang'];
   $paket = $_POST['paket'];
   $alamat = $_POST['alamat'];
   $nomor_telepon = $_POST['nomor_telepon'];
   $email = $_POST['email'];

   if($paket ==  "K.Jantan - Paket A")
   { 
       $harga = "Rp1.200.000" ;
   }
else if($paket ==  "K.Jantan - Paket B")
{ 
    $harga = "Rp1.350.000" ;
}

else if($paket ==  "K.Jantan - Paket C")
{ 
    $harga = "Rp1.500.000" ;
}

else if($paket ==  "K.Jantan - Paket D")
{ 
    $harga = "Rp1.650.000" ;
}

else if($paket ==  "K.Jantan - Paket E")
{ 
    $harga = "Rp1.800.000" ;
}

else if($paket ==  "K.Jantan - Paket Special")
{ 
    $harga = "Rp2.100.000" ;
}

else if($paket ==  "K.BETINA - Paket A")
   { 
       $harga = "Rp1.050.000" ;
   }

else if($paket ==  "K.BETINA - Paket B")
{ 
    $harga = "Rp1.200.000" ;
}

else if($paket ==  "K.BETINA - Paket C")
{ 
    $harga = "Rp1.350.000" ;
}

else if($paket ==  "K.BETINA - Paket D")
{ 
    $harga = "Rp1.550.000" ;
}

else if($paket ==  "K.BETINA - Paket E")
{ 
    $harga = "Rp1.650.000" ;
}

else if($paket ==  "K.BETINA - Paket Special")
{ 
    $harga = "Rp1.900.000" ;
}

else if($paket ==  "NASI BOX - Paket A")
   { 
       $harga = "Rp1.050.000" ;
   }

else if($paket ==  "NASI BOX - Paket B")
{ 
    $harga = "Rp1.200.000" ;
}

else if($paket ==  "NASI BOX - Paket C")
{ 
    $harga = "Rp1.350.000" ;
}

else if($paket ==  "NASI BOX - Paket D")
{ 
    $harga = "Rp1.500.000" ;
}

else if($paket ==  "NASI BOX - Paket E")
{ 
    $harga = "Rp1.650.000" ;
}

else if($paket ==  "NASI BOX - Paket Special")
{ 
    $harga = "Rp1.900.000" ;
}

if ($nama_depan ==NULL || $nama_belakang ==NULL || $paket ==NULL || $alamat ==NULL || $email ==NULL || $nomor_telepon ==NULL )
{
    echo "<div align='center'>PESANAN GAGAL , JANGAN KOSONGKAN DATA|| <a href='Form Pemesanan.php'>Pesan Ulang</a></div>";
}

else
{
       $data = "INSERT INTO data_pesanan (Nama_Depan, Nama_Belakang, No_Telepon , Email , Alamat_Rumah , Paket) 
       VALUES ('$nama_depan', '$nama_belakang', '$nomor_telepon' , '$email' , '$alamat' , '$paket')";
       $simpan = $db->query($data);
       
       $pembayaran = "INSERT INTO data_pembayaran (Nama_Depan, Nama_Belakang, Pesanan , Harga , Status_Pembayaran , No_Telepon) 
       VALUES ('$nama_depan', '$nama_belakang', '$paket' , '$harga' , 'Belum Lunas' , '$nomor_telepon')";
       $result = $db->query($pembayaran);
       if($simpan && $result) {
         echo "<div align='center'>Pesanan anda berhasil,silahkan lakukan pembayaran sebesar ".$harga." ke nomor rekening BCA 123-4567-8900 A/N Bayu Satya Saputra dan Konfirmasi Pembayaran ke Whatsapp 0812-3456-7890|| <a href='Aqiban.php'>Menu Utama</a></div>";
        
         
  


        //  $to = $email ;
        //  $subject = "Pesanan Aqiban";
        //  $txt = "Silahkan Lakukan Pembayaran sebesar sekiansekian ke sekiansekian";
        //  $headers = "From: Aqiban.com" ;
         
        //  mail($to,$subject,$txt,$headers);
         
       
        } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     
    }  
?>