<?php

$username = "";

try {

    if (empty($username)) {
        throw new Exception("Username tidak boleh kosong!");
    }

    echo "Login berhasil. Selamat datang, " . $username;

} catch (Exception $e) {

    echo "Terjadi Error: " . $e->getMessage();

}

?>