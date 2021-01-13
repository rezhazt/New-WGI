<?php
    $db_host = "127.0.0.1";
    $db_user = "root";
    $db_pass = "";
    $db_name = "db_wgi";

    $kon = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if(mysqli_connect_errno()){
        echo 'Gagal koneksi ke database : '.mysqli_connect_error();
    }   else{
        echo 'sukses';
    }
?>