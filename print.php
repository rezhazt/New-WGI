<?php
    include 'connection.php';

    $query = mysqli_query($kon, "SELECT * FROM tabel_visitor ORDER BY id DESC LIMIT 1");

    if(mysqli_num_rows($query)>0){
        while($data = mysqli_fetch_array($query)){
            echo $data["nama"];
        }
    }
?>