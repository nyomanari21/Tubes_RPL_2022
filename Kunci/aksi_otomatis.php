<?php

include("../config.php");

// jika tombol tambah aksi otomatis di klik
if(isset($_GET['tambah'])){

    // simpan data aksi otomatis
    $waktu = $_GET['waktu'];
    $aksi = $_GET['aksi'];

    // tambahkan ke log aksi otomatis
    $sql = "INSERT INTO log_aksi_otomatis (id_aksi_otomatis, id_kunci_pintu, waktu)
            VALUES ('$aksi', '1', '$waktu')";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "Data aksi otomatis berhasil ditambahkan";
        header("location: ../index.php");
    }
    else{
        die('Invalid query : ' . mysqli_error($conn));
    }
    
}

// jika tombol hapus aksi otomatis di klik
if(isset($_GET['id_hapus'])){

    // simpan id hapus
    $id = $_GET['id_hapus'];

    // hapus data aksi otomatis
    $sql = "DELETE FROM log_aksi_otomatis WHERE id_log_aksi = '$id'";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "Data aksi otomatis berhasil dihapus";
        header("location: ../index.php");
    }
    else{
        die('Invalid query : ' . mysqli_error($conn));
    }

}

?>