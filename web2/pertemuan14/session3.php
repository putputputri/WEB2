<?php
/****************************************************
Halaman ini merupakan halaman logout, 
dimana kita menghapus session yang ada.
*****************************************************/

// Mulai session
session_start();

// Cek apakah session login ada
if (isset($_SESSION['login'])) {
    
    // Cara 1: Hapus satu session tertentu
    unset($_SESSION['login']);
    
    // Cara 2: Hapus semua session (alternatif)
    // session_unset();     // hapus semua variabel session
    // session_destroy();   // hapus seluruh session
    
    echo "<h1>Anda sudah berhasil LOGOUT</h1>";
    echo "<h2>Klik <a href='session1.php'>di sini</a> untuk LOGIN kembali</h2>";
    echo "<h2>Anda sekarang tidak bisa masuk ke halaman 
          <a href='session2.php'>session2.php</a> lagi</h2>";
    
} else {
    // Jika belum login, redirect ke halaman login
    header("Location: session1.php");
    exit;
}
?>