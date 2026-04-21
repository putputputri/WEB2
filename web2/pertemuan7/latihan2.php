<HTML>
<HEAD>
    <TITLE>Penggunaan List</TITLE>
</HEAD>
<BODY>

<?php
$program = array('Bobo', 'Doraemon', 'Spiderman');

list($majalah, $komik, $film) = $program;

echo "Jenis Buku & Hiburan : <br />";
echo "Cerpen : $majalah <br />";
echo "Cerita Bergambar : $komik <br />";
echo "Bioskop : $film";
?>

</BODY>
</HTML>