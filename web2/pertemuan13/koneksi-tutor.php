<?php
// koneksi-tutor.php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "db_mahasiswa";

// Membuka koneksi ke MySQL dengan MYSQLI
$Open = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$Open) {
    die("Koneksi ke server MySQL gagal: " . mysqli_connect_error());
}

// Pilih database (bisa dihapus karena sudah di parameter ke-4)
// mysqli_select_db($Open, $dbname);
?>