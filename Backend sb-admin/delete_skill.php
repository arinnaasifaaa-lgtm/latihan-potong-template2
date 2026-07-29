<?php
include "connection.php";

// Mengambil ID training yang dikirim dari halaman tabel
$id_skill = $_GET['id_skill'];

// Menghapus data training berdasarkan ID yang dipilih
$delete_skill = mysqli_query($koneksi, "DELETE FROM skill WHERE id_skill ='$id_skill'");

// Setelah berhasil dihapus, kembali ke halaman tabel training
header("Location:tabel_skill.php");