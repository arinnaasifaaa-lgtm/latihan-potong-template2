<!-- ini adlah langkah kedua setelah membuat form_language.php, yaitu membuat action_insert_language.php
untuk menyimpan data dari form_language.php ke database -->
<!-- selanjutnya ke tabel_language.php untuk menampilkan data dari database ke tabel -->
<?php
include "connection.php";

// $nama utk penyimpanan data sedangkan $_POST['nama'] utk menerima inputan dari form_language.php
$Vlanguage = $_POST['bahasa'];
$vflagimage = time() .".jpg";

// untuk menyimpan file foto yang nanti ditambahkan dari form_portfolio.php
$path = "fotobende/";

// mysqli_query() untuk menyimpan data ke database, 
// sedangkan move_uploaded_file() untuk menyimpan file foto ke folder yg sudah ditentukan
// untuk mengupload foto digunakan fungsi move_uploaded_file() 
move_uploaded_file($_FILES['flag']['tmp_name'], $path . $vflagimage);

// Menyimpan data bahasa dan nama file gambar ke tabel language
$sql_insert = mysqli_query($koneksi, "INSERT INTO language (bahasa, flag)
VALUES ('$Vlanguage', '$vflagimage')");

// header location utk menhgarahkan halaman ke tabel_education.php
header("Location:tabel_language.php");