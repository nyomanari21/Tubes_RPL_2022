<?php

include("config.php");

// fungsi mengambil data log kunci pintu
function show_log_kunci_pintu(){
    global $conn;

    // ambil data log kunci pintu
    $sql = "SELECT * FROM log_kunci_pintu ORDER BY id_log_kunci DESC LIMIT 5";
    $result = mysqli_query($conn, $sql);
    
    // simpan data dalam array
    $data = [];
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
    return $data;
}

?>