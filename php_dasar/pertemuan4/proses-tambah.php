<?php

// 1. Panggil Koneksi
require 'koneksi.php';

// 2. Tangkap data dari Form (menggunakan POST)
if($_SERVER["REQUEST_METHOD"] == 'POST') {
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

    // 3. Siapkan Query Tambah/Insert
    $sql = "INSERT INTO anggota (nama,jurusan,jk,alamat) VALUE (?,?,?,?)";
    $stmt = $pdo->prepare($sql);

    // 4. Eksekusi query dengan memasukkan array data
    $stmt->execute([$nama,$jurusan,$jk,$alamat]);

    // 5. Redirect (Kembali ke halaman utama ke index)
    header("Location: index.php");
    exit(); 
}





?>