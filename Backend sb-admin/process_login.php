<?php
session_start(); // 1. Dipindahkan ke baris paling atas
include "connection.php";

// 2. AMANKAN INPUT DARI HACKER (MENCEGAH SQL INJECTION)
$email = mysqli_real_escape_string($koneksi, $_POST['email']);
$password = mysqli_real_escape_string($koneksi, $_POST['password']);

$sql_login = mysqli_query($koneksi, "SELECT * FROM login WHERE email='$email' AND password='$password'");

$cek = mysqli_num_rows($sql_login);

if ($cek > 0) {

    $_SESSION['status'] = "login";
    $_SESSION['email'] = $email;

    header("Location: index.php");
    exit(); // 3. Menghentikan eksekusi script setelah redirect

} else {

    header("Location: login.php?pesan=gagal");
    exit(); // 3. Menghentikan eksekusi script setelah redirect

}
?>