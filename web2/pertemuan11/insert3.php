<?php
$conn = mysqli_connect("localhost", "root", "");
if (!$conn) {
    die('Could not connect: ' . mysqli_error());
}

mysqli_select_db($conn, "lat_dbase");

$sql = "INSERT INTO tbl_mhs (FirstName, LastName, Age)
        VALUES ('$_POST[firstname]', '$_POST[lastname]', '$_POST[age]')";

if (!mysqli_query($conn, $sql)) {
    die('Error: ' . mysqli_error($conn));
}
echo "1 record added";

mysqli_close($conn);
?>