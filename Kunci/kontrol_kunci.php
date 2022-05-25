<?php

include("../config.php");

// jika tombol buka di klik
if(isset($_GET['buka'])){
    // tambah ke log kunci pintu
    date_default_timezone_set("Asia/Jakarta"); // atur zona waktu
    $username = $_GET['username']; // username akun yang sedang login
    $tanggal = date("Ymd");
    $waktu = date("His");

    $sql = "INSERT INTO log_kunci_pintu (id_pengguna, id_kunci_pintu, tanggal, waktu, status)
            VALUES ('$username', '1', '$tanggal', '$waktu', 'Terbuka')";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "Data berhasil ditambahkan (Terbuka)";
        header("location: ../index.php");
    }
    else{
        die('Invalid query : ' . mysqli_error($conn));
    }
}
// jika tombol tutup di klik
else if(isset($_GET['tutup'])){
    // tambah ke log kunci pintu
    date_default_timezone_set("Asia/Jakarta"); // atur zona waktu
    $username = $_GET['username']; // username akun yang sedang login
    $tanggal = date("Ymd");
    $waktu = date("His");

    $sql = "INSERT INTO log_kunci_pintu (id_pengguna, id_kunci_pintu, tanggal, waktu, status)
            VALUES ('$username', '1', '$tanggal', '$waktu', 'Tertutup')";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "Data berhasil ditambahkan (Tertutup)";
        header("location: ../index.php");
    }
    else{
        die('Invalid query : ' . mysqli_error($conn));
    }
}

?>