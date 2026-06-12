<?php
/****************************************************
Halaman ini merupakan halaman contoh penciptaan session. 
Perintah session_start() harus ditaruh di perintah pertama 
tanpa spasi di depannya. 
Perintah session_start() harus ada pada setiap halaman 
yang berhubungan dengan session
*****************************************************/

// Mulai session (WAJIB di paling atas, sebelum output apapun)
session_start();

// Cek apakah tombol Login ditekan
if (isset($_POST['Login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    
    // Periksa login (contoh: username = rahadian, password = 123)
    if ($user == "rahadian" && $pass == "123") {
        
        // Membuat session
        $_SESSION['login'] = $user;
        
        // Menuju ke halaman pemeriksaan session
        echo "<h1>Anda berhasil LOGIN</h1>";
        echo "<h2>Klik <a href='session2.php'>di sini (session2.php)</a> ";
        echo "untuk menuju ke halaman pemeriksaan session</h2>";
        
    } else {
        echo "<script>alert('Username atau Password salah!');</script>";
        // Tampilkan form login lagi
        include 'form_login.php';
    }
} else {
    // Tampilkan form login
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Login Here...</title>
        <style>
            body { font-family: Arial; padding: 50px; }
            .login-box {
                width: 300px;
                margin: auto;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
            }
            input[type="text"], input[type="password"] {
                width: 100%;
                padding: 8px;
                margin: 5px 0 15px 0;
                border: 1px solid #ccc;
                border-radius: 4px;
            }
            input[type="submit"] {
                background-color: #4CAF50;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                width: 100%;
            }
            h2 { text-align: center; color: #333; }
        </style>
    </head>
    <body>
        <div class="login-box">
            <h2>Login Here...</h2>
            <form action="" method="post">
                Username : <input type="text" name="user" required><br>
                Password : <input type="password" name="pass" required><br>
                <input type="submit" name="Login" value="Log In">
            </form>
        </div>
    </body>
    </html>
    <?php
}
?>