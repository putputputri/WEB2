<?php
$conn = mysqli_connect("localhost", "root", "", "lat_dbase");
$hasil = mysqli_query($conn, "select * from tbl_mhs");
$hit = mysqli_num_rows($hasil);
echo "jumlah record $hit";
?>