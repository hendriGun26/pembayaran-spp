<?php
session_start();
include 'koneksi.php';
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$id_kelas = $_POST['id_kelas'];
$password = sha1('123456');
$query = "INSERT INTO students VALUES ('', '$nis','$password', '$nama','$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$id_kelas')";

if (mysqli_query($koneksi, $query)) {
    $_SESSION['pesan'] = 'Data berhasil ditambahkan';
    header('location: /dts-jwd/siswa.php');
    exit();
}
