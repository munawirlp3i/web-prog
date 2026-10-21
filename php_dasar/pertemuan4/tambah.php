<?php

// BAGIAN LOGIKA

// 1. Panggil mesin koneksi yang sudah kita buat
require 'koneksi.php';




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
        <div class="row mt-3">
            <div class="col-md">
                <h3>Tambah Data Anggota</h3>
                <a href="index.php" class="btn btn-info">Kembali</a>
            </div>
        </div>

        <form action="proses-tambah.php" method="POST" class="mt-3">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Anggota</label>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" name="jurusan" class="form-control" id="jurusan">
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jenis Kelamin</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jk" value="laki-laki" id="laki-laki">
                    <label class="form-check-label" for="laki-laki">
                        Laki-laki
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jk" value="perempuan" id="perempuan">
                    <label class="form-check-label" for="perempuan">
                        Perempuan
                    </label>
                </div>
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat">
            </div>

            <button type="submit" class="btn btn-success mb-3">Simpan</button>

        </form>



    </div>
</body>

</html>