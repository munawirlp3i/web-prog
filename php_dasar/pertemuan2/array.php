<?php
    // echo "TEST ARRAY";

    // Array biasa
    $mahasiswa = ["Munawir", "08123455", "IK", 10000];
    // Cara ke 1 untuk menampilkan array
    // var_dump($mahasiswa);

    // Cara ke 2 untuk menampilkan array
    echo $mahasiswa[0];
    echo "<br>";
    echo $mahasiswa[1];
    echo "<br>";
    echo $mahasiswa[2];
    echo "<br>";
    echo $mahasiswa[3];

    echo "<br>";
    echo "===========================================";
    echo "<br>";

    // Array Associative (array yg memiliki key dan value)
    $mahasiswa2 = [
        "nama" => "Yudi", 
        "nohp" => "08123456",
        "jurusan" => 'IK',
        "saldo" => 10000,
        "hobi" => "Mancing",
    ];

    echo $mahasiswa2["nama"];
    echo "<br>";
    echo $mahasiswa2["nohp"];
    echo "<br>";
    echo $mahasiswa2["jurusan"];
    echo "<br>";
    echo $mahasiswa2["saldo"];
    echo "<br>";
    echo $mahasiswa2["hobi"];

    




?>