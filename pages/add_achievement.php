<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/startmin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <title>Tambah Achievement</title>

</head>

<body>
    <!-- form-formulir -->
    <div class="row" style="margin-top: 30px;">
        <div class="col-lg-6 col-lg-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center;">Tambah Achievement</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="add_achievement.php" class="form" method="post">
                                <div class="form-group">
                                    <label for="judul">Judul</label>
                                    <input type="text" name="judul">
                                </div>
                                <div class="form-group">
                                    <label>Pilih File Achievement</label>
                                    <input type="file" name="foto">
                                </div>
                                <div style="margin-top: 50px; text-align: center;">
                                    <button type="submit" id="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal" name="Submit">Tambah</button>
                                    <button type="button" class="btn btn-success"><a href="achievement.php" style="color: white;">Kembali</a></button>
                                </div>
                                <!-- modal -->
                                <!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                Data Berhasil ditambah.
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success"><a href="product.php" style="color: white;">Kembali</a></button>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- end modal -->

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end form -->

    <?php

    // Check If form submitted, insert form data into users table.
    if (isset($_POST['Submit'])) {

        $judul = $_POST['judul'];
        $foto = $_POST['foto'];

        // include database connection file
        include_once("../connection.php");

        // Insert user data into table
        $result_achievement = mysqli_query($kon, "INSERT INTO tabel_achievement (judul,foto) VALUES ('$judul','$foto')");

        // Show message when user added
        echo "Data Achievement berhasil ditambahkan.";
    }
    ?>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../js/materialize.min.js"></script>

    <!-- jQuery -->
    <script src="../js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/startmin.js"></script>

</body>

</html>