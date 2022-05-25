<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'db_tubes_rpl';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$conn){
    die('Could not connect: ' . mysql_error());
}

?>