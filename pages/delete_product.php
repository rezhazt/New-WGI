<?php
// include database connection file
include '../connection.php';
 
// Get id from URL to delete that user
$id = $_GET['id'];
 
// Delete user row from table based on given id
$result_product = mysqli_query($kon, "DELETE FROM tabel_product WHERE id=$id");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:product.php");

?>