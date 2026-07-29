<?php
include "connection.php";

// Mengambil ID training yang dikirim dari halaman tabel
$id_training = $_GET['id_training'];

// Menghapus data training berdasarkan ID yang dipilih
$delete_training = mysqli_query($koneksi, "DELETE FROM training WHERE id_training='$id_training'");

// Setelah berhasil dihapus, kembali ke halaman tabel training
header("Location:tabel_training.php");