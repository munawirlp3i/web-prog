<?php
    $host = 'localhost';
    $db   = 'asisten';
    $user = 'root';
    $pass = '';

    try {
        // FUNGSI KONEKSI
        $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

        // Meminta mesin untuk menampilkan pesan error jika ada masalah
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        // Jika gagal, hentikan program dan tampilkan errornya
        die("Koneksi ke Database Gagal: " . $e->getMessage());
    }

?>