<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <link rel="stylesheet" href="css/style.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<title>PT. Globalindo Intimates</title>

<body id="home" class="scrollspy">


  <!-- navbar -->
  <div class="navbar-fixed">
    <nav>
      <!-- <div class="container"> -->
      <div class="nav-wrapper">
        <a style="padding-left: 30px;" href="#home" class="brand-logo">PT. Globalindo Intimates</a>
        <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#product">Product</a></li>
          <li><a href="#">Achievement</a></li>
          <li><a href="event.php">Event</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="visitor.php">Visitor</a></li>
          <li><a href="login.php">Login</a></li>
        </ul>
      </div>
      <!-- </div> -->
    </nav>
  </div>
  <!-- akhir navbar -->

  <!-- side-nav -->
  <ul class="sidenav" id="mobile">
    <li><a href="#">Home</a></li>
    <li><a href="#">About Us</a></li>
    <li><a href="#">Product</a></li>
    <li><a href="#">Achievement</a></li>
    <li><a href="#">Event</a></li>
    <li><a href="#">Contact</a></li>
    <li><a href="#">Visitor</a></li>
    <li><a href="#">Login</a></li>
  </ul>
  <!-- akhir side-nav -->

  <!-- slider -->
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="img/home/Automated Strap making section.jpg" style="opacity: 0.5;">
        <div class="caption center-align">
          <h3>WELCOME TO PT. GLOBALINDO INTIMATES</h3>
          <h5 class="light grey-text text-lighten-3">We serve the best quality product</h5>
        </div>
      </li>
  </div>
  <!-- akhir slider -->

  <?php

  include "connection.php";
  $queryAbout = mysqli_query($kon, "SELECT * FROM tabel_about ORDER BY idAbout DESC LIMIT 1");
  ?>


  <!-- about -->
  <?php
  if (mysqli_num_rows($queryAbout) > 0) {

    while ($dataAbout = mysqli_fetch_array($queryAbout)) {

      $visiAbout = $dataAbout["visiAbout"];
      $misiAbout = $dataAbout["misiAbout"];

    }
  }
  ?>
  <section class="about scrollspy" id="about">
    <div class="container" style="height: 600px;">
      <div class="row">
        <h3 class="light grey-text text-darken-3 center">Our Visi & Misi</h3>
        <hr class="center" style="width: 300px; margin-bottom: 50px; border-top: 5px solid black">
        <div class="row">
          <div class="col m8">
            <p style="text-align: justify;"><?php echo $visiAbout ?></p>
          </div>
          <div class="col m4">
            <img class="responsive-img" style="float: right;" src="img/visi&misi/vision1.jpeg">
          </div>
        </div>
        <div class="row">
          <div class="col m4">
            <img class="responsive-img" src="img/visi&misi/mission.png">
          </div>
          <div class="col m8">
            <p style="text-align: justify;"><?php echo $misiAbout ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end-about -->

  <!-- product -->
  <section class="product grey lighten-3 scrollspy" id="product">
    <div class="container" style="height: 600px;">
      <h3 class="light grey-text text-darken-3 center">Our Product</h3>
      <hr class="center" style="width: 300px; margin-bottom: 50px; border-top: 5px solid black;">
      <div class="row">
        <div class="col m3 s12">
          <img src="img/product/FILA.jpg" class="responsive-img materialboxed">
        </div>
        <div class="col m3 s12">
          <img src="img/product/nurse uniform.jpg" class="responsive-img materialboxed">
        </div>
        <div class="col m3 s12">
          <img src="img/product/puma hitam.jpg" class="responsive-img materialboxed">
        </div>
        <div class="col m3 s12">
          <img src="img/product/SBW Panty.jpg" class="responsive-img materialboxed">
        </div>
      </div>

      <div class="row">
        <div class="col m3 s12">
          <img src="img/product/Spelding Cln.jpg" class="responsive-img materialboxed">
        </div>
        <div class="col m3 s12">
          <img src="img/product/suster.jpg" class="responsive-img materialboxed">
        </div>
        <div class="col m3 s12">
          <img src="img/product/t-shirt.jpg" class="responsive-img materialboxed">
        </div>
        <div class="col m3 s12">
          <img src="img/product/vf 2.jpg" class="responsive-img materialboxed">
        </div>
      </div>
    </div>
  </section>
  <!-- end-product -->

  <!-- achievement -->
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="img/achievement/IMG_1048.jpg" style="opacity: 0.5;">
        <div class="caption center-align">
          <h3>Our Achievement</h3>
          <h5 class="light grey-text text-lighten-3">Penghargaan Ketenagakerjaan RI</h5>
        </div>
      </li>
      <li>
        <img src="img/achievement/API-certificate.jpg" style="opacity: 0.5;">
        <div class="caption left-align">
          <h3>Our Achievement</h3>
          <h5 class="light grey-text text-lighten-3">Certificate Textile Association</h5>
        </div>
      </li>
      <li>
        <img src="img/achievement/Disabilitas-certificate.jpg" style="opacity: 0.5;">
        <div class="caption right-align">
          <h3>Our Achievement</h3>
          <h5 class="light grey-text text-lighten-3">Disabilitas Certificate</h5>
        </div>
      </li>
      <li>
        <img src="img/achievement/Vokasi-certificate.jpg" style="opacity: 0.5;">
        <div class="caption center-align">
          <h3>Our Achievement</h3>
          <h5 class="light grey-text text-lighten-3">Vokasi Certificate</h5>
        </div>
      </li>
  </div>
  <!-- end-achievement -->

  <!-- contact -->
  <section class="contact scrollspy" id="contact">
    <div class="container" style="height: 600px;">
      <h3 class="light grey-text text-darken-3 center">Contact Us</h3>
      <hr class="center" style="width: 300px; margin-bottom: 50px; border-top: 5px solid black">
      <div class="row">
        <div class="col m7 12">
          <form action="adapter_form_kontak.php" method="post">>
            <div class="card-panel">
              <div class="input-field">
                <input type="email" name="emailKontak" class="validate">
                <label for="email">Email</label>
              </div>
              <div class="input-field">
                <input type="text" name="telephoneKontak" require>
                <label for="telephone">Telephone Number</label>
              </div>
              <div class="input-field">
                <textarea type="text" name="messageKontak" class="materialize-textarea" style="height: 88px;"></textarea>
                <label for="message">Message</label>
              </div>
              <button type="submit" class="btn">Send</button>
            </div>
          </form>
        </div>


        </script>

        <div class="col m5 12">
          <div class="card-panel">
            <ul class="collection with-header">
              <li class="collection-header" style="font-weight: bold;">Our Office</li>
              <li class="collection-item">Jl. Raya Solo-Yogya, Mlese, Ceper, Klaten, Central Java - Indonesia</li>
              <li class="collection-header" style="font-weight: bold;">Contact Person</li>
              <li class="collection-item">(+62 - 272) 331120 / 331121</li>
              <li class="collection-item">Fax. (+62 - 272) 331130</li>
              <li class="collection-item">info@globalindointimates.com</li>
            </ul>
          </div>
        </div>
      </div>
    </div>


  </section>
  <!-- end-contact -->

  <!-- footer -->
  <footer class="red darken-1 white-text center" style="padding: 10px 0;">
    <p>Copyright ©2021 All rights reserved | Made PT. Globalindo Intimates</p>
  </footer>
  <!-- end-footer -->

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>

  <!-- script-side-nav -->
  <script>
    const sideNav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sideNav);
  </script>
  <!-- akhir script-nav -->

  <!-- script-slider -->
  <script>
    const slideBar = document.querySelectorAll('.slider');
    M.Slider.init(slideBar, {
      indicators: false,
      height: 600
    });
  </script>
  <!-- end-script-slider -->

  <!-- script materialbox -->
  <script>
    const imageBox = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(imageBox);
  </script>
  <!-- end-materialbox -->

  <!-- scrollspy -->
  <script>
    const scroll = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(scroll, {
      scrollOffset: 65
    });
  </script>
  <!-- end-scrollspy -->

</body>

</html>