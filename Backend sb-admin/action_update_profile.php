<?php
// Memanggil file koneksi database
include "connection.php";

// $vnama untuk penyimpanan sedangkan $_POST menerima inputan
// nama="nama" di form_profile.php
// Menerima data yang dikirim dari form update_profile.php menggunakan metode POST
$id_profile = $_POST['id_profile'];
$vnama = $_POST['nama'];
$vdeskripsi = $_POST['about'];
$vwebsite = $_POST['website'];
$vphone = $_POST['phone'];
$vemail = $_POST['email'];
$vcity = $_POST['address'];
$vfind_me = $_POST['find_me'];
$vNationality = $_POST['nationality'];

// Mengupdate data profile sesuai ID yang dipilih
$update_profile = mysqli_query($koneksi, "UPDATE profile SET nama='$vnama',about='$vdeskripsi',website='$vwebsite',
phone='$vphone',email='$vemail',address='$vcity',find_me='$vfind_me',nationality='$vNationality' WHERE id_profile='$id_profile'");

// Setelah berhasil diupdate, kembali ke halaman tabel profile
header("Location:tabel_profile.php");
?>