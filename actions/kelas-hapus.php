<?php
session_start();
include 'koneksi.php';

$id = $_GET['id'];

$query = "DELETE FROM rooms WHERE id_kelas=$id";

if (mysqli_query($koneksi, $query)) {
    $_SESSION['pesan'] = 'Data berhasil hapus';
    header('location: /dts-jwd/kelas.php');
}
