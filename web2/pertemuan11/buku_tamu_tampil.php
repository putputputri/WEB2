<html>
<head>
    <title>Daftar Buku Tamu</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background: #f2f2f2; }
        .pagination { margin-top: 20px; }
        .pagination a { padding: 8px 12px; text-decoration: none; border: 1px solid #ddd; }
        .active { background: blue; color: white; }
    </style>
</head>
<body>
<h2>📖 Daftar Buku Tamu</h2>

<?php
// Koneksi database
$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "db_buku_tamu");

// Pagination: menentukan halaman
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limit = 5; // 5 record per halaman
$offset = ($page - 1) * $limit;

// Hitung total record
$total_result = mysqli_query($conn, "SELECT COUNT(*) as total FROM tbl_buku_tamu");
$total_data = mysqli_fetch_row($total_result);
$total_records = $total_data[0];
$total_pages = ceil($total_records / $limit);

// Ambil data dengan limit
$query = "SELECT * FROM tbl_buku_tamu ORDER BY tanggal DESC, jam DESC LIMIT $offset, $limit";
$result = mysqli_query($conn, $query);

echo "<table>";
echo "<tr><th>No</th><th>Nama</th><th>Email</th><th>Pesan</th><th>Tanggal</th><th>Jam</th></tr>";

$no = $offset + 1;
while ($data = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $no++ . "</td>";
    echo "<td>" . $data['nama'] . "</td>";
    echo "<td>" . $data['email'] . "</td>";
    echo "<td>" . $data['pesan'] . "</td>";
    echo "<td>" . date('d/m/Y', strtotime($data['tanggal'])) . "</td>";
    echo "<td>" . $data['jam'] . "</td>";
    echo "</tr>";
}
echo "</table>";

// Pagination links
echo "<div class='pagination'>";
for ($i = 1; $i <= $total_pages; $i++) {
    $class = ($i == $page) ? "active" : "";
    echo "<a href='?page=$i' class='$class'>$i</a> ";
}
echo "</div>";
?>

</body>
</html>