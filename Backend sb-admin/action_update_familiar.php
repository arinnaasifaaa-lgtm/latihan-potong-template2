<!-- from file update_form_education.php --> 
<?php
include "connection.php";

// Menerima data yang dikirim dari form_training.php
$id_familiar = $_POST['id_familiar'];
$vnama = $_POST['nama'];
$vicon = $_POST['icon'];

// Menyimpan data training ke tabel training
$update_familiar = mysqli_query($koneksi, "UPDATE familiar SET nama='$vnama',icon='$vicon'  WHERE `id_familiar`='$id_familiar'");

// Setelah berhasil disimpan, kembali ke halaman tabel training
header("Location:tabel_familiar.php");