<?php
   session_start();
   require_once("koneksi.php");
   $cari = $_POST['nomor_telepon'];
   $database = "SELECT * FROM data_pembayaran WHERE No_Telepon = '$cari'";
   $query = $db->query($database);
   $hasil = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT DATA DARI DATABASE DENGAN PHP - WWW.MALASNGODING.COM</title>
</head>
<body>
	<center>
 
		<h2>DATA PESANAN<br/></H2>
 
 
		<?php 
		include 'koneksi.php';
		

if($query->num_rows == 0) {
    echo "<div align='center'>Data Tidak Ditemukan! <a href='Form Pembayaran.php'>Back</a></div>";
  } else ?>
 
		<table border="1">
			<tr>
                <th>No</th>
				<th>Nama Depan</th>
				<th>Nama Belakang</th>
				<th>Pesanan</th>
				<th>Harga</th>
                <th>Status_Pembayaran</th>
                <th>No_Telepon</th>
			</tr>
			<?php 
			$no = 1;
			$sql = mysqli_query($db,"select * from data_pembayaran WHERE No_Telepon = '$cari'");
			while($data = mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data['Nama_Depan']; ?></td>
				<td><?php echo $data['Nama_Belakang']; ?></td>
				<td><?php echo $data['Pesanan']; ?></td>
                <td><?php echo $data['Harga']; ?></td>
                <td><?php echo $data['Status_Pembayaran']; ?></td>
                <td><?php echo $data['No_Telepon']; ?></td>
			</tr>
			<?php 
			}
			?>
		</table>
 
		<br/> 
 
	</center>
</body>
</html>