<?php

include("config.php");

// fungsi mengambil data log aksi otomatis
function show_log_aksi_otomatis(){
    global $conn;

    // ambil data log aksi otomatis
    $sql = "SELECT log_aksi_otomatis.id_log_aksi, log_aksi_otomatis.waktu, aksi_otomatis.nama_aksi FROM log_aksi_otomatis
            JOIN aksi_otomatis ON log_aksi_otomatis.id_aksi_otomatis = aksi_otomatis.id_aksi_otomatis
            ORDER BY log_aksi_otomatis.waktu ASC";
    $result = mysqli_query($conn, $sql);
    
    // simpan data dalam array
    $data = [];
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
    return $data;
}

?>