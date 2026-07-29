<?php
// Memanggil file koneksi database
include "connection.php";

// Menerima data yang dikirim dari form_training.php
$vjurusan = $_POST['nama_training'];
$vbelajar = $_POST['tahun_training'];
$vtempat = $_POST['tempat_training'];
$vdeskripsi = $_POST['deskripsi'];

// Menyimpan data training ke tabel training
$sql_insert = mysqli_query($koneksi, "INSERT INTO training (nama_training, tahun_training, tempat_training, deskripsi)
VALUES ('$vjurusan', '$vbelajar', '$vtempat', '$vdeskripsi')");

// Setelah berhasil disimpan, kembali ke halaman tabel training
header("Location:tabel_training.php");