<html>
<head>
    <title>Buku Tamu</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        .container { max-width: 500px; margin: auto; }
        .form-group { margin-bottom: 15px; }
        label { display: block; font-weight: bold; }
        input, textarea { width: 100%; padding: 8px; }
        button { background: blue; color: white; padding: 10px 20px; border: none; }
        .success { background: green; color: white; padding: 10px; }
    </style>
</head>
<body>
<div class="container">
    <h2>📝 Buku Tamu</h2>
    
    <?php
    // Koneksi ke database (mysql versi lama sesuai materi)
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "db_buku_tamu");

    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $pesan = $_POST['pesan'];
        $tanggal = date('Y-m-d');
        $jam = date('H:i:s');
        
        $sql = "INSERT INTO tbl_buku_tamu (nama, email, pesan, tanggal, jam)
                VALUES ('$nama', '$email', '$pesan', '$tanggal', '$jam')";
        
        if (mysqli_query($conn, $sql)) {
            echo "<div class='success'>Terima kasih, pesan Anda telah tersimpan!</div>";
        } else {
            echo "<div class='error'>Error: " . mysqli_error($conn) . "</div>";
        }
    }
    ?>
    
    <form method="POST">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email">
        </div>
        <div class="form-group">
            <label>Pesan</label>
            <textarea name="pesan" rows="4" required></textarea>
        </div>
        <button type="submit" name="submit">Kirim Pesan</button>
    </form>
</div>
</body>
</html>