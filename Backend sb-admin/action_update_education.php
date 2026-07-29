<!-- from file update_form_education.php --> 
<?php
include "connection.php";

// Menerima data yang dikirim dari form_training.php
$id_education = $_POST['id_education'];
$vjurusan = $_POST['nama_jurusan'];
$vbelajar = $_POST['tahun_belajar'];
$vtempat = $_POST['tempat_belajar'];
$vdeskripsi = $_POST['deskripsi'];

// Menyimpan data training ke tabel training
$update_education = mysqli_query($koneksi, "UPDATE education SET nama_jurusan='$vjurusan',tahun_belajar='$vbelajar',
tempat_belajar='$vtempat',deskripsi='$vdeskripsi' WHERE `id_education`='$id_education'");

// Setelah berhasil disimpan, kembali ke halaman tabel training
header("Location:tabel_education.php");