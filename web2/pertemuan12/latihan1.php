<?php
$conn = mysqli_connect("localhost", "root", "");
if (!$conn) {
    die('Could not connect: ' . mysqli_error());
}

mysqli_select_db($conn, "lat_dbase");

mysqli_query($conn, "UPDATE tbl_mhs SET Age = '36'
             WHERE FirstName = 'Karina' AND LastName = 'Suwandi'");

mysqli_close($conn);
?>