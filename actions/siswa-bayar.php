<?php
session_start();
include 'koneksi.php';
$id_petugas = $_POST['id_petugas'];
$id_siswa = $_POST['id_siswa'];
$id_kelas = $_POST['id_kelas'];
$bulan_bayar = $_POST['bulan_bayar'] . "-01";
$nominal = $_POST['spp'];
$tanggal_pembayaran = date('Y-m-d');

$data = mysqli_query($koneksi, "SELECT * FROM students s INNER JOIN pembayarans p on s.id_siswa = p.id_siswa WHERE s.id_siswa='$id_siswa' AND '$bulan_bayar' = p.bulan_bayar");


if (mysqli_num_rows($data) > 0) {
    $bulan = date('F', strtotime($bulan_bayar));
    $tahun = date('Y', strtotime($bulan_bayar));
    $_SESSION['error'] = 'Bulan ' . $bulan . ' ' . $tahun . ' Sudah di Bayar';
    header('location: /dts-jwd/pembayaran.php');
    exit();
} else {
    $query = "INSERT INTO pembayarans VALUES ('', '$id_petugas', '$id_siswa','$id_kelas', '$tanggal_pembayaran', '$bulan_bayar', '$nominal')";
    echo date('Y-m-d');
    if (mysqli_query($koneksi, $query)) {
        $_SESSION['pesan'] = 'Pembayaran Berhasil';
        header('location: /dts-jwd/pembayaran.php');
        exit();
    }
}
