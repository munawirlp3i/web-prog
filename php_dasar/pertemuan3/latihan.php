<?php

// BAGIAN LOGIKA

// 1. Panggil mesin koneksi yang sudah kita buat
require 'koneksi.php';

// 2. Siapkan perintah SQL Query
$query = "SELECT * FROM anggota";

// 3. Suruh pdo untuk menjalakan perintah query tersebut
$stmt = $pdo->query($query);

// Ambil semua datanya dan tampung ke variable data_anggota
$data_anggota = $stmt->fetchAll(PDO::FETCH_ASSOC);

// var_dump($data_anggota); 
?>

<!-- BAGIAN TAMPILAN -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota Asisten</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class='container'>
        <h3>Data Anggota</h3>
        <table class="table table-striped" border="1">
            <tr class="table-success">
                <th>No</th>
                <th width="200px;">Nama</th>
                <th>Jurusan</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
            </tr>
            <?php $no = 1;
            foreach ($data_anggota as $row) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['jurusan']; ?></td>
                    <td><?= $row['jk']; ?></td>
                    <td><?= $row['alamat']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

</body>

</html>