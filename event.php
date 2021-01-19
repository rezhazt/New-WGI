<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- navbar -->
    <div class="navbar-fixed">
        <nav>
            <!-- <div class="container"> -->
            <div class="nav-wrapper">
                <a style="padding-left: 30px;" href="index.php" class="brand-logo">PT. Globalindo Intimates</a>
                <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php?page=#about">About Us</a></li>
                    <li><a href="index.php?page=#product">Product</a></li>
                    <li><a href="#">Achievement</a></li>
                    <li><a href="event.php">Event</a></li>
                    <li><a href="index.php?page=#contact">Contact</a></li>
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

    <!-- event -->
    <section class="event" id="event">

        <php $upload_dir='img/event/' ;
        $sqlEvent="SELECT * FROM tabel_event" ;
        $rsltEvent=mysqli_query($kon, $sqlEvent);
        while ($dataEvent=mysqli_fetch_array($rsltEvent)) { ?>

            <div>
                <div class="container" style="margin-top: 50px;">
                    <div class="row">
                        <div class="col m6 12">
                            <img class="materialboxed" width="400px" src="img/even/assistance vocational.png">
                        </div>
                        <div class="col m6 12">
                            <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores dolorum velit autem architecto! Labore, consequuntur numquam. Sunt voluptatibus est similique esse, quia id maxime corporis, laudantium perspiciatis magnam possimus officia.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col m6 12">
                            <h4>Assisstance Vocational</h4>
                        </div>
                        <div class="col m6 12">
                            <h5 style="text-align: right;">17/5/2018</h5>
                        </div>
                    </div>
                </div>
            </div>




            <php } ?>


                <div id="event">
                    <div class="container" style="margin-top: 50px;">
                        <div class="row">
                            <div class="col m6 12">
                                <img class="materialboxed" width="400px" src="img/even/assistance vocational.png">
                            </div>
                            <div class="col m6 12">
                                <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores dolorum velit autem architecto! Labore, consequuntur numquam. Sunt voluptatibus est similique esse, quia id maxime corporis, laudantium perspiciatis magnam possimus officia.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col m6 12">
                                <h4>Assisstance Vocational</h4>
                            </div>
                            <div class="col m6 12">
                                <h5 style="text-align: right;">17/5/2018</h5>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
    <!-- end event -->

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

    <!-- materialbox -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var image = document.querySelectorAll('.materialboxed');
            var instances = M.Materialbox.init(image);
        });
    </script>
    <!-- end materialbox -->

</body>

</html>