<?php
session_start();
include 'koneksi.php';
$id = $_POST['id'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$id_kelas = $_POST['id_kelas'];
$password = sha1('123456');

$query = "UPDATE students set nis='$nis', password = '$password', nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', id_kelas='$id_kelas' where id_siswa=$id";

if (mysqli_query($koneksi, $query)) {
    $_SESSION['pesan'] = 'Data berhasil diubah';
    header('location: /dts-jwd/siswa.php');
    exit();
}
