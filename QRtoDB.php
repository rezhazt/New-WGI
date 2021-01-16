<?php
include "QRCode/QRCode.class.php";
include "connection.php";
$query = mysqli_query($kon, "SELECT * FROM tabel_visit ORDER BY id DESC LIMIT 1");

if (mysqli_num_rows($query) > 0) {

    while ($data = mysqli_fetch_array($query)) {

        $oQRC = new QRCode; // Create vCard Object
        $id = $data["id"];
        $oQRC->idDB($id);
        $oQRC->display();

        $oQRC = $_POST();

        //Query input menginput data kedalam tabel barang
        //$sql="insert into tabel_visit (oQRC) values ('$filename')";
        $sqll = "UPDATE tabel_visit SET oQRC='$oQRC' WHERE id=$id";
        //Mengeksekusi/menjalankan query diatas	
        $hasil = mysqli_query($kon, $sqll);

        //Kondisi apakah berhasil atau tidak
        if ($hasil) {
            echo "sukses";
            exit;
        } else {
            echo "Gagal insert data";
            exit;
        }
    }
}
