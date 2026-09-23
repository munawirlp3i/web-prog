<?php
    $nama_lengkap = 'Munawir';
    $nilai_akhir = 70;

    $grade = '';
    if($nilai_akhir >= 85) {
        $grade = 'A';
    } else if($nilai_akhir >= 70) {
        $grade = 'B';
    } else if($nilai_akhir >= 55) {
        $grade = 'C';
    } else {
        $grade = 'D';
    }

    echo "Mahasiswa yang bernama $nama_lengkap mendapatkan nilai $nilai_akhir dengan Grade: $grade <br><br>";

    // Contoh Perulangan
    for ($i=1; $i < 10; $i++) { 
        echo "Antrian ke-$i <br> <hr>";
    }

    // function / fungsi
    function salam($nama, $waktu) {
        echo "Halo $nama, Selamat $waktu";
        echo '<br>';
    }

    salam('Munawir', 'Pagi');
    salam('Fulan', 'Siang');
    salam('Putri', 'Malam');


    // function / fungsi
    function salamDinamis($nama) {
        date_default_timezone_set('Asia/Jakarta');
        $tgl = date('d-m-Y');
        $waktu = date('H:i:s');
        echo "Halo $nama, Selamat , Hari ini $tgl, $waktu";
        echo '<br>';
    }

    salamDinamis('Wir');
    



?>