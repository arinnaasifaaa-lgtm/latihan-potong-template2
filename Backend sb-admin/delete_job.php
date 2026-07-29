<?php
// Memanggil file koneksi database
include "connection.php";

// Mengambil ID job yang dikirim dari halaman tabel
$id_job = $_GET['id_job'];

// Menghapus data job berdasarkan ID yang dipilih
$delete_job = mysqli_query($koneksi, "DELETE FROM job WHERE id_job='$id_job'");

// Setelah berhasil dihapus, kembali ke halaman tabel job
header("Location:tabel_job.php");