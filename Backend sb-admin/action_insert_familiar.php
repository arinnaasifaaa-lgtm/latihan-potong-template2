<!-- ini adalah langkah kedua dari FORM_EDUCATION>PHP -->
<!-- selanjutnya k tabel_education --> 
<?php
include "connection.php";

// nama untuk penyimpanan sedangkan $_POST menerima inputan name="nama" dr form_education.php
$vnama = $_POST['nama'];
$vicon = $_POST['icon'];

// mysqli_query adlh perintah utk menyatukan koneksi database dg wuery tabel.
// nama_jurusan  adl nama kolom database
// $vjurusan adl variabel di atas yg sudah kita bikin sblmnya
$sql_insert = mysqli_query($koneksi, "INSERT INTO familiar (nama, icon)
VALUES ('$vnama','$vicon')");

// header location utk menhgarahkan halaman ke tabel_education.php
header("Location:tabel_familiar.php");