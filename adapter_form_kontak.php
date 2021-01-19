<?php
//Include file koneksi ke database
include "connection.php";

//menerima nilai dari kiriman form input-barang 
$emailKontak=$_POST["emailKontak"];
$telephoneKontak=$_POST["telephoneKontak"];
$messageKontak=$_POST["messageKontak"];

//Query input menginput data kedalam tabel barang
  $sqlKontak="insert into tabel_kontak (emailKontak, telephoneKontak, messageKontak) values
		('$emailKontak', '$telephoneKontak', '$messageKontak')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($kon,$sqlKontak);
 

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo "<script>alert('Data berhasil di tambahkan!');history.go(-1);
	history.back(self);</script>";
	include "$contact";
	exit;
  }
else {
	echo "Gagal insert data";
	exit;
}
