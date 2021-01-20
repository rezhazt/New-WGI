<?php
// include database connection file
include '../connection.php';

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $id = $_POST['id'];

    $deskripsi = $_POST['deskripsi'];
    $foto = $_POST['foto'];

    // update user data
    $result_product = mysqli_query($kon, "UPDATE tabel_product SET deskripsi='$deskripsi',foto='$foto' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: product.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result_product = mysqli_query($kon, "SELECT * FROM tabel_product WHERE id=$id");

while ($dataProduct = mysqli_fetch_array($result_product)) {
    $deskripsi = $dataProduct['deskripsi'];
    $foto = $dataProduct['foto'];
}
?>
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

    <title>Edit Product</title>

</head>

<body>


    <!-- form-formulir -->
    <div class="row" style="margin-top: 30px;">
        <div class="col-lg-6 col-lg-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center;">Edit Produk</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="edit_product.php" class="form" name="update_product" method="post">
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <input type="text" name="deskripsi" value=<?php echo $deskripsi; ?>>
                                </div>
                                <div class="form-group">
                                    <label>Pilih Foto Produk</label>
                                    <input type="file" name="foto" value=<?php echo $foto; ?>>
                                </div>
                                <div style="margin-top: 50px; text-align: center;">
                                    <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
                                    <button type="submit" id="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal" name="update" value="Update">Update</button>
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