<?php
session_start();
include 'koneksi.php';


$id = $_POST['id'];
$jurusan = $_POST['jurusan'];
$spp = $_POST['spp'];

$query = "UPDATE majors SET jurusan='$jurusan', spp='$spp' WHERE id_jurusan=$id";

if (mysqli_query($koneksi, $query)) {
    $_SESSION['pesan'] = 'Data berhasil di ubah';
    header('location: /dts-jwd/jurusan.php');
    exit();
}
