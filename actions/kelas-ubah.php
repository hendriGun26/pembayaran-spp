<?php
session_start();
include 'koneksi.php';
$kelas = $_POST['kelas'];
$id_jurusan = $_POST['id_jurusan'];
$id = $_POST['id'];

$query = "UPDATE rooms set kelas='$kelas', id_jurusan='$id_jurusan' where id_kelas=$id";

if (mysqli_query($koneksi, $query)) {
    $_SESSION['pesan'] = 'Data berhasil diubah';
    header('location: /dts-jwd/kelas.php');
    exit();
}
