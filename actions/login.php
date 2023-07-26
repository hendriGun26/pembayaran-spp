<?php
session_start();
include 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM employees");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nip = $_POST['nip'];
    $password = $_POST['password'];

    $encryptedPassword = sha1($password);

    $loginSuccess = false;

    foreach ($query as $row) {
        if ($nip === $row['nip'] && $encryptedPassword === $row['password']) {
            $_SESSION['admin'] = $row['id_petugas'];
            $_SESSION['level'] = $row['level'];
            $loginSuccess = true;
            break;
        }
    }

    if ($loginSuccess) {
        if ($_SESSION['level'] == 1) {
            header('location: /dts-jwd/index.php');
        } elseif ($_SESSION['level'] == 0) {
            header('location: /dts-jwd/index.php');
            exit();
        }
    } else {
        $_SESSION['pesan'] = 'Username atau Password Salah';
        header('location: /dts-jwd/login.php');
    }
}
