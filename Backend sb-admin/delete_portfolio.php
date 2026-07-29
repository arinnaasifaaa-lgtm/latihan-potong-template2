<?php
include "connection.php";

$id_portfolio= $_GET['id_portfolio'];

$imgsportfolio = mysqli_query($koneksi, "SELECT * FROM portfolio WHERE
id_portfolio IN ('$id_portfolio')");

// tampilkan foto
$vimg= mysqli_fetch_object($imgsportfolio);
// Folder tujuan untuk menyimpan file yang akan diupload
$path = "foto/";

// is_file gunanya untuk mengecek apakah file ada atau tidak. jika ada maka akan dihapus\
 // is_file() untuk mengecek terlebih dahulu file di folder foto sebelum di hapus
 // unlink() untuk menghapus file foto lama di folder foto
 if (is_file($path . $vimg->portfolio)) {
    unlink($path . $vimg->portfolio);
 }

// ini perintah untuk menghapus data di tabel sidebar_photo berdasarkan id_profile yg dibawa
$sql_delete = mysqli_query($koneksi, "DELETE FROM portfolio WHERE 
id_portfolio='$id_portfolio'");

// setelah data dihapus maka akan kembali ke tabel_sidebar_photo.php
// setelah proses delete dijalankan maka akan kembali ke tabel_sidebar_photo.php
header("Location:tabel_portfolio.php");