<!-- ini adalah langkah kedua dari FORM_EDUCATION>PHP -->
<!-- selanjutnya k tabel_education --> 
<?php
include "connection.php";

// nama untuk penyimpanan sedangkan $_POST menerima inputan name="nama" dr form_education.php
$vjurusan = $_POST['nama_jurusan'];
$vbelajar = $_POST['tahun_belajar'];
$vtempat = $_POST['tempat_belajar'];
$vdeskripsi = $_POST['deskripsi'];

// mysqli_query adlh perintah utk menyatukan koneksi database dg wuery tabel.
// nama_jurusan  adl nama kolom database
// $vjurusan adl variabel di atas yg sudah kita bikin sblmnya
$sql_insert = mysqli_query($koneksi, "INSERT INTO education (nama_jurusan, tahun_belajar, tempat_belajar, deskripsi)
VALUES ('$vjurusan','$vbelajar','$vtempat','$vdeskripsi')");

// header location utk menhgarahkan halaman ke tabel_education.php
header("Location:tabel_education.php");