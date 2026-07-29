<?php
include "connection.php";

// Menerima data yang dikirim dari form_training.php
$id_login = $_POST['id_login'];
$vemail = $_POST['email'];
$vpassword = $_POST['password'];

// Menyimpan data training ke tabel training
$update_login= mysqli_query($koneksi, "UPDATE login SET email='$vemail',
password='$vpassword' WHERE id_login ='$id_login'");

// Setelah berhasil disimpan, kembali ke halaman tabel training
header("Location:tabel_login.php");