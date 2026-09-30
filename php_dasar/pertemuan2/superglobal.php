<?php
    // Variable Superglobal pada PHP
    // $_GET dan $_POST type data nya ARRAY
    // Variable $_GET dan $_POST fungsi untuk menampung data yang di kirim lewat URL

    // Menangkap data dari URL menggunakan $_GET
    if(isset($_GET['nama']) && isset($_GET['search'])) {
        $nama_user = $_GET['nama'];
        $search = $_GET['search'];

        echo "Halo $nama_user, kamu lagi cari $search";
    }
    
    echo "<br> ================================";

    // Menangkap data dari URL menggunakan $_POST
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        echo "<br>";
        echo "Hasil POST:<br>";
        echo $username;
        echo "<br>";
        echo $password;
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET AND POST</title>
</head>
<body>
    <h3>FORM SEARCH (GET)</h3>
    <form action="">
        Nama :<input type="text" name="nama">
        Cari :<input type="text" name="search">
        <input type="submit">
    </form>
    <hr>
    <h3>FORM LOGIN (POST)</h3>
    <form action="" method="POST">
        <ul>
            <li>username <input type="text" name="username"></li>
            <li>password <input type="password" name="password"></li>
            <li><input type="submit"></li>
            <li><input type="reset"></li>
        </ul>
    </form>
</body>
</html>