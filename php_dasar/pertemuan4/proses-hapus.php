<?php

// 1. Koneksi
require 'koneksi.php';

// 2. Tangkap ID data yg akan dihapus
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Siapkan query hapus
    $sql = "DELETE FROM anggota WHERE id = ?";
    $stmt = $pdo->prepare($sql);

    // Eksekusi
    $stmt->execute([$id]);
}

// Kembali ke halaman utama
header("Location: index.php");
exit;


?>