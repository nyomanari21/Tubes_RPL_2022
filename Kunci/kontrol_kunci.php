<?php

include("../config.php");

// catat waktu saat halaman direfresh
date_default_timezone_set('Asia/Jakarta');
$time = date('H:i');

// jika tombol buka di klik
if(isset($_GET['buka'])){
    // jika status kunci belum tertutup
    if($_GET['status'] != "Terbuka"){
        // tambah ke log kunci pintu
        date_default_timezone_set("Asia/Jakarta"); // atur zona waktu
        $username = $_GET['username']; // username akun yang sedang login
        $tanggal = date("Ymd");
        $waktu = date("His");
    
        $sql = "INSERT INTO log_kunci_pintu (id_pengguna, id_kunci_pintu, tanggal, waktu, status)
                VALUES ('$username', '1', '$tanggal', '$waktu', 'Terbuka')";
        $result = mysqli_query($conn, $sql);
    
        // jika berhasil
        if($result){
            echo "Data berhasil ditambahkan (Terbuka)";
            header("location: ../index.php?time={$time}"); // kembali ke halaman utama dan kirim waktu saat kontrol kunci dilakukan
        }
        else{
            die('Invalid query : ' . mysqli_error($conn));
        }
    }
    // jika sudah, kembali ke halaman utama
    else{
        header("location: ../index.php?time={$time}");
    }
}
// jika tombol tutup di klik
else if(isset($_GET['tutup'])){
    // jika status kunci belum tertutup
    if($_GET['status'] != "Tertutup"){
        // tambah ke log kunci pintu
        date_default_timezone_set("Asia/Jakarta"); // atur zona waktu
        $username = $_GET['username']; // username akun yang sedang login
        $tanggal = date("Ymd");
        $waktu = date("His");
    
        $sql = "INSERT INTO log_kunci_pintu (id_pengguna, id_kunci_pintu, tanggal, waktu, status)
                VALUES ('$username', '1', '$tanggal', '$waktu', 'Tertutup')";
        $result = mysqli_query($conn, $sql);
    
        // jika berhasil
        if($result){
            echo "Data berhasil ditambahkan (Tertutup)";
            header("location: ../index.php?time={$time}"); // kembali ke halaman utama dan kirim waktu saat kontrol kunci dilakukan
        }
        else{
            die('Invalid query : ' . mysqli_error($conn));
        }
    }
    // jika sudah, kembali ke halaman utama
    else{
        header("location: ../index.php?time={$time}");
    }
}

?>