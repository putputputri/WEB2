<?php
/****************************************************
Halaman ini merupakan contoh halaman pemeriksaan session. 
Pemeriksaan session biasanya dilakukan jika suatu halaman 
memiliki akses terbatas. Misalnya harus login terlebih dahulu.
****************************************************/

// Mulai session
session_start();

// Pemeriksaan session
if (isset($_SESSION['login'])) {
    // Jika sudah login, tampilkan konten
    echo "<h1>Selamat Datang " . $_SESSION['login'] . "</h1>";
    echo "<h2>Halaman ini hanya bisa diakses jika Anda sudah login</h2>";
    echo "<h2>Klik <a href='session3.php'>di sini (session3.php)</a> untuk LOGOUT</h2>";
    
    // Informasi tambahan
    echo "<hr>";
    echo "<h3>Informasi Session:</h3>";
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
    
} else {
    // Session belum ada → belum login
    die ("Anda belum login! Anda tidak berhak masuk ke halaman ini.<br>
          Silahkan login <a href='session1.php'>di sini</a>");
}
?>