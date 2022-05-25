<?php

session_start(); // Mulai session
session_destroy(); // Hapus semua session
header("location: login.php"); // Redirect ke halaman login.php

?>