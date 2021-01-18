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
	//echo '<script>alert("Terima Kasih telah menghubungi kami")</script>';
	include "index.php";
	exit;
  }
else {
	echo "Gagal insert data";
	exit;
}
