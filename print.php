<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <link rel="stylesheet" href="css/style.css">
    <title>Print Hasil</title>
</head>
<body>

<!-- form login -->
<section class="login_admin" id="login_admin">
        <div class="container" style="margin-top: 50px;">
            <div class="row">
                <div class="col m8 12 offset-m2">
                        <div class="card-panel">
                        <?php
                            include "connection.php";
                            $sql="select * from tabel_visitor order by id desc limit 1";
                            
                            $hasil=mysqli_query($kon,$sql);
                            $no=0;
                            while ($data = mysqli_fetch_array($hasil)) {
                            $no++;
                            
                                echo $no; 
                                echo $data["no_id"]; 
                                echo $data["name"]; 
                                echo $data["phone"];
                                echo $data["email"];
                                echo $data["visit_date"];
                                echo $data["tujuan"];
                                echo $data["covid_form"];
                            }
                        ?>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end form login -->

 <!--JavaScript at end of body for optimized loading-->
 <script type="text/javascript" src="js/materialize.min.js"></script>

</body>
</html>