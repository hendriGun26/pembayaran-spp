<?php
session_start();
include 'koneksi.php';
$kelas = $_POST['kelas'];
$id_jurusan = $_POST['id_jurusan'];

$query = "INSERT INTO rooms VALUES ('', '$kelas', '$id_jurusan')";

if (mysqli_query($koneksi, $query)) {
    $_SESSION['pesan'] = 'Data berhasil ditambahkan';
    header('location: /dts-jwd/kelas.php');
    exit();
}
