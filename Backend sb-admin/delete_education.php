
<?php
include "connection.php";

// unruk menerima id_profile yg dibawa dari tombol DELETE dari TABEL PROFILE menggunakan $id_profile
// $_GET['id_profile']; menyimpan sementara id yang nanti akan digunakan pada perintah DELETE di bawahnya.
$id_education=$_GET['id_education'];

// ini perintah sql untuk mendelete data mendasarkan id_profile yang dibawa
$delete = mysqli_query ($koneksi, "DELETE FROM education WHERE id_education=$id_education");

// setelah proses delete dijalankan, maka akan kembali ke file tabel_profile.php
header("Location: tabel_education.php");
?>