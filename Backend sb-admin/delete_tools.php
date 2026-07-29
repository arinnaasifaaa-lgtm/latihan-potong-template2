<?php
include "connection.php";

// Menerima id_tools dari tombol DELETE
$id_tools = $_GET['id_tools'];

// Menghapus data berdasarkan id_tools
$delete = mysqli_query($koneksi, "DELETE FROM tools WHERE id_tools='$id_tools'");

// Kembali ke halaman tabel tools
header("Location: tabel_tools.php");

?>