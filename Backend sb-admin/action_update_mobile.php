<!-- from file update_form_education.php --> 
<!-- Mengambil data dari form update_mobile.php -->
<?php
// Memanggil file koneksi database
include "connection.php";

// Menerima data yang dikirim dari form menggunakan metode POST
$id_mobile = $_POST['id_mobile'];
$vnama = $_POST['nama'];
$vicon = $_POST['icon'];

// Mengupdate data mobile berdasarkan ID yang dipilih
$update_mobile = mysqli_query($koneksi, "UPDATE mobile SET nama='$vnama',icon='$vicon'  
WHERE `id_mobile`='$id_mobile'");

// Setelah berhasil, kembali ke halaman tabel mobile
header("Location:tabel_mobile.php");