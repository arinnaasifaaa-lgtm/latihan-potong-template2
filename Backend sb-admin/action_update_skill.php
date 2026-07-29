<?php
// Memanggil file koneksi database
include "connection.php";

// Menerima data yang dikirim dari form update_training.php
$id_skill = $_POST['id_skill'];
$vskill = $_POST['nama_skill'];


// Mengupdate data training berdasarkan ID yang dipilih
$update_skill= mysqli_query($koneksi, "UPDATE skill SET nama_skill='$vskill' WHERE `id_skill`='$id_skill'");   

// Setelah berhasil diupdate, kembali ke halaman tabel training
header("Location:tabel_skill.php");