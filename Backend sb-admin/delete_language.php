<?php
include "connection.php";   

// unruk menerima id_language yg dibawa dari tombol DELETE dari TABEL LANGUAGE menggunakan $id_language
// $_GET['id_language']; menyimpan sementara id yang nanti akan digunakan pada perintah DELETE di bawahnya.
$id_language=$_GET['id_language'];

// ini perintah sql untuk mendelete data mendasarkan id_language yang dibawa
$delete = mysqli_query ($koneksi, "DELETE FROM language WHERE id_language=$id_language");

// setelah proses delete dijalankan, maka akan kembali ke file tabel_language.php
header("Location: tabel_language.php");
?>