<?php
session_start();
include 'koneksi.php';

$id = $_GET['id'];

$query = "DELETE FROM majors WHERE id_jurusan=$id";

if (mysqli_query($koneksi, $query)) {
    $_SESSION['pesan'] = 'Data berhasil hapus';
    header('location: /dts-jwd/jurusan.php');
    exit();
}
