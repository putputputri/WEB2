<?php 
// action_input_data.php

if (isset($_POST['Submit']) && $_POST['Submit'] == "Submit") { 
    
    // Koneksi database
    include "koneksi-tutor.php"; 

    if (!$Open) {
        die("Koneksi ke server MySQL gagal: " . mysqli_connect_error());
    }
    
    // Ambil dan bersihkan data
    $id_mahasiswa = trim(mysqli_real_escape_string($Open, $_POST['id_mahasiswa'])); 
    $nama = trim(mysqli_real_escape_string($Open, $_POST['nama'])); 
    $jurusan = mysqli_real_escape_string($Open, $_POST['jurusan']); 
    $alamat = trim(mysqli_real_escape_string($Open, $_POST['alamat'])); 
    $telepon = trim(mysqli_real_escape_string($Open, $_POST['telepon'])); 
    
    // Validasi data kosong
    if (empty($id_mahasiswa) || empty($nama) || empty($alamat) || empty($telepon) || empty($jurusan)) { 
        echo "<script> 
                alert('Semua data harus diisi!'); 
                document.location='form_input_mahasiswa.php'; 
              </script>";
        mysqli_close($Open);
        exit;
    }
    
    // Cek NIM duplikat
    $query_cek = "SELECT id_mahasiswa FROM mahasiswa WHERE id_mahasiswa = '$id_mahasiswa'";
    $result_cek = mysqli_query($Open, $query_cek);
    
    if (mysqli_num_rows($result_cek) > 0) { 
        echo "<script> 
                alert('NIM sudah dipakai! Silahkan ganti NIM yang lain'); 
                document.location='form_input_mahasiswa.php'; 
              </script>";
        exit;
    }
    
    // Insert data
    $input = "INSERT INTO mahasiswa (id_mahasiswa, nama, jurusan, alamat, telepon) 
              VALUES ('$id_mahasiswa', '$nama', '$jurusan', '$alamat', '$telepon')"; 
    
    if (mysqli_query($Open, $input)) { 
        echo "<script> 
                alert('Input Data Mahasiswa Berhasil!'); 
                document.location='form_input_mahasiswa.php'; 
              </script>";
    } else { 
        $errorMessage = addslashes(mysqli_error($Open));
        echo "<script> 
                alert('Input Data Mahasiswa Gagal! Error: $errorMessage'); 
                document.location='form_input_mahasiswa.php'; 
              </script>";
    } 
    
    mysqli_close($Open); 
} else {
    header("Location: form_input_mahasiswa.php");
    exit;
}
?>