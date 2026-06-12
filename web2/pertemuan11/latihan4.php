<?php
$conn = mysqli_connect("localhost", "root", "");
if (!$conn) {
    die('Could not connect: ' . mysqli_error());
}

mysqli_select_db($conn, "lat_dbase");

mysqli_query($conn, "INSERT INTO tbl_mhs (FirstName, LastName, Age)
             VALUES ('Karina', 'Suwandi', '29')");

mysqli_query($conn, "INSERT INTO tbl_mhs (FirstName, LastName, Age)
             VALUES ('Glenn', 'Gandari', '32')");

mysqli_close($conn);
?>