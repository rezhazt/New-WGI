<?php

// mengaktifkan session php

include "connection.php";
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$dataLogin = mysqli_query($kon,"select * from tabel_admin where username='$username' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($dataLogin);
 
if($cek > 0){
    // $_SESSION['username'] = $username;
	// $_SESSION['status'] = "login";
	header("location:index_admin.php");
}else{
	header("location:index.php?pesan=gagal");
}

?>