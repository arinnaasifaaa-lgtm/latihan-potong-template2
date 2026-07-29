<!-- from file update_form_education.php --> 
<!-- Mengambil data dari form update_mobile.php -->
<?php
// Memanggil file koneksi database
include "connection.php";

// Menerima data yang dikirim dari form menggunakan metode POST
$id_tools = $_POST['id_tools'];
$vnama = $_POST['nama'];
$vicon = $_POST['icon'];

// Mengupdate data mobile berdasarkan ID yang dipilih
$update_tools = mysqli_query($koneksi, "UPDATE tools SET nama='$vnama',icon='$vicon'  
WHERE `id_tools`='$id_tools'");

// Setelah berhasil, kembali ke halaman tabel mobile
header("Location:tabel_tools.php");