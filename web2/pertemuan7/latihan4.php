<HTML>
<HEAD>
    <TITLE>Penggunaan In Array</TITLE>
</HEAD>
<BODY>

<?php
$program = array("HTML", "PHP", "CSS", "JavaScript");

// menampilkan isi array
print_r($program);
echo "<br><br>";

$cari = "HTML";

if (in_array($cari, $program)) {
    echo "Program Basis Web $cari ada di dalam array";
} else {
    echo "Program Basis Web $cari tidak ada di dalam array";
}
?>

</BODY>
</HTML>