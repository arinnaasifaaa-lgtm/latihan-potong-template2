<?php
// Memanggil file koneksi database
include "connection.php";

// Menerima data yang dikirim dari form update_training.php
$id_training = $_POST['id_training'];
$vjurusan = $_POST['nama_training'];
$vbelajar = $_POST['tahun_training'];
$vtempat = $_POST['tempat_training'];
$vdeskripsi = $_POST['deskripsi'];

// Mengupdate data training berdasarkan ID yang dipilih
$update_training = mysqli_query($koneksi, "UPDATE training SET nama_training='$vjurusan',tahun_training='$vbelajar',
tempat_training='$vtempat',deskripsi='$vdeskripsi' WHERE `id_training`='$id_training'");   

// Setelah berhasil diupdate, kembali ke halaman tabel training
header("Location:tabel_training.php");