<?php
include "connection.php";

// Menerima data yang dikirim dari form_training.php
$id_job = $_POST['id_job'];
$vjob = $_POST['nama_pekerjaan'];
$vwork = $_POST['tahun_bekerja'];
$vplace = $_POST['tempat_bekerja'];
$vdeskripsi = $_POST['deskripsi'];

// Menyimpan data training ke tabel training
$update_job = mysqli_query($koneksi, "UPDATE job SET nama_pekerjaan='$vjob',
tahun_bekerja='$vwork',tempat_bekerja='$vplace',deskripsi='$vdeskripsi' WHERE id_job ='$id_job'");

// Setelah berhasil disimpan, kembali ke halaman tabel training
header("Location:tabel_job.php");