<?php
$conn = mysqli_connect("localhost", "root", "");

if (!$conn) {
    die('Could not connect: ' . mysqli_error());
}

mysqli_select_db($conn, "lat_dbase");

mysqli_query($conn, "DELETE FROM tbl_mhs WHERE LastName='Prabowo'");

mysqli_close($conn);
?>