
<?php
// Memanggil file koneksi database
include "connection.php";

// unruk menerima id_profile yg dibawa dari tombol DELETE dari TABEL PROFILE menggunakan $id_profile
// $_GET['id_profile']; menyimpan sementara id yang nanti akan digunakan pada perintah DELETE di bawahnya.
$id_mobile=$_GET['id_mobile'];

// ini perintah sql untuk mendelete data mendasarkan id_profile yang dibawa
$delete = mysqli_query ($koneksi, "DELETE FROM mobile WHERE id_mobile=$id_mobile");

// setelah proses delete dijalankan, maka akan kembali ke file tabel_profile.php
header("Location: tabel_mobile.php");
?>