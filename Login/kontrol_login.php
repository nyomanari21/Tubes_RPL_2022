<?php

session_start(); // mulai session
include("../config.php");

// ambil data akun
$username = $_POST['username'];
$password = $_POST['password'];
// $password_md5 = md5($password); // enkripsi password dengan md5

if($username != '' && $password != ''){
    // Buat query untuk mengecek apakah ada data user dengan username dan password yang dikirim dari form
    $sql = "SELECT * FROM pengguna WHERE id_pengguna='$username' AND password='$password'";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($query); // Ambil data dari hasil query

    if(mysqli_num_rows($query) < 1){
        // Buat sebuah cookie untuk menampung data pesan kesalahan
        setcookie("message", "Username atau Password salah", time()+60);
        header("location: login.php");
    }
    else{
        // echo $data['username'] . $data['password'];

        $_SESSION['username'] = $data['id_pengguna']; // Set session username dan isi dari data id_pengguna
        $_SESSION['nama'] = $data['nama']; // Set session nama dan isi dari data nama

        setcookie("message", "", time()-60); //delete cookie message
        header("location: ../index.php"); // redirect ke halaman index.php
    }
}
else{
    setcookie("message", "Username atau Password kosong", time()+60);
    header("location: login.php"); // redirect kembali ke halaman login.php
}

?>