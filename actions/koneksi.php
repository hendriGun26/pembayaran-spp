<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "spp";

$koneksi = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
