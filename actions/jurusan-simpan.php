<?php
session_start();
include 'koneksi.php';


$jurusan = $_POST['jurusan'];
$spp = $_POST['spp'];

$query = "INSERT INTO majors VALUES ('', '$jurusan', '$spp')";

if (mysqli_query($koneksi, $query)) {
    $_SESSION['pesan'] = 'Data berhasil ditambahkan';
    header('location: /dts-jwd/jurusan.php');
    exit();
}
