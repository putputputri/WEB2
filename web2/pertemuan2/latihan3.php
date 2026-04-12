<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan Balok</title>
</head>
<body>
    <h2 align="center">Program Penghitung Balok</h2>
    <form method="POST" action="">
        <table align="center" border="0" cellpadding="5">
            <tr>
                <td>Panjang</td>
                <td>:</td>
                <td><input type="text" name="panjang" required></td>
                <td>cm</td>
            </tr>
            <tr>
                <td>Lebar</td>
                <td>:</td>
                <td><input type="text" name="lebar" required></td>
                <td>cm</td>
            </tr>
            <tr>
                <td>Tinggi</td>
                <td>:</td>
                <td><input type="text" name="tinggi" required></td>
                <td>cm</td>
            </tr>
            <tr>
                <td colspan="4" align="center">
                    <input type="submit" name="hitung" value="Hitung">
                    <input type="reset" value="Batal">
                </td>
            </tr>
        </table>
    </form>
    
    <?php
    if (isset($_POST['hitung'])) {
        $p = $_POST['panjang'];
        $l = $_POST['lebar'];
        $t = $_POST['tinggi'];
        
        // Validasi apakah input adalah angka
        if (is_numeric($p) && is_numeric($l) && is_numeric($t) && $p > 0 && $l > 0 && $t > 0) {
            $volume = $p * $l * $t;
            $luas = 2 * (($p * $l) + ($p * $t) + ($l * $t));
            
            echo "<hr>";
            echo "<h3 align='center'>Hasil Perhitungan</h3>";
            echo "<table align='center' border='1' cellpadding='5'>";
            echo "<tr><td>Panjang</td><td>$p cm</td></tr>";
            echo "<tr><td>Lebar</td><td>$l cm</td></tr>";
            echo "<tr><td>Tinggi</td><td>$t cm</td></tr>";
            echo "<tr><td bgcolor='yellow'><b>Volume</b></td><td bgcolor='yellow'><b>$volume cm³</b></td></tr>";
            echo "<tr><td bgcolor='cyan'><b>Luas Permukaan</b></td><td bgcolor='cyan'><b>$luas cm²</b></td></tr>";
            echo "</table>";
        } else {
            echo "<p align='center' style='color:red'>Error: Panjang, Lebar, dan Tinggi harus berupa angka positif!</p>";
        }
    }
    ?>
</body>
</html>