<?php
include "connection.php";
$query = mysqli_query($kon, "SELECT * FROM tabel_visit ORDER BY id DESC LIMIT 1");
include "QRCode/QRCode.class.php";
?>



<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <title>tiket tamu</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
  <div class="container center" >
  <div id="border_tiket" style="width: 1748px; height: 1240px;" >
    <img src="img/logo/logo_name_globalindo.png" width="800" >
    <div  style="font-weight: bold; font-size: 50px;">
      <p>TANDA PENGENAL</p>
    </div>
    </tbody>
    <div style="font-size: 40px;">
    <?php if (mysqli_num_rows($query) > 0) { ?>
      <?php
      while ($data = mysqli_fetch_array($query)) {
      ?>
        <tr>
          <td><?php echo $data["tujuan"]; ?></td>
          <?php
            $oQRC = new QRCode; // Create vCard Object
            $oQRC->idDB($data["id"]);
            $oQRC->display();
          ?>
          <?php
          $jumlah = $data["test1"] + $data["test2"] + $data["test3"] + $data["test4"] + $data["test5"] + $data["test6"] + $data["test7"] + $data["test8"]; ?>
          <td><?php echo $data["fullname"]; ?><br></td>
          <td><?php echo $data["visitDate"]; ?><br></td>
          <?php if ($jumlah < 5) {
            echo "Resiko Covid 19 : Rendah";
          } else {
            echo "Resiko Covid 19 : Tinggi";
          } ?>
        </tr>
      <?php  } ?>
    <?php } ?>
    </tbody>
    
    </div>
    <div style="font-size: 45px;">
    <p>
      <u>Harap Tunjukan di gerbang Pos Security utama sebelum memasuki area perusahaan </u></p>
  </div>
</div>
</body>

</html>