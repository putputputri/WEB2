<?php
$conn = mysqli_connect("localhost", "root", "", "lat_dbase");

$hasil = mysqli_query($conn, "select * from tbl_mhs");

while ($data = mysqli_fetch_array($hasil)) {
    echo "$data[FirstName] $data[LastName] $data[Age]<br>";
}
?>