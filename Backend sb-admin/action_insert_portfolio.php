<?php
include "connection.php";

// untk membuat nama secara random hrs menggunakan fungsi time() agar nama foto yg diupload tidak sama dgn foto yg lain
$vjudul = $_POST['judul_portfolio'];
$namaimage = time() .".jpg";
$vlink = $_POST['link'];
$vdeskripsi = $_POST['deskripsi'];
$vtype = $_POST['jenis'];

// untuk menyimpan file foto yang nanti ditambahkan dari file form_portfolio.php
$path = "foto/";

// mysqli_query adlh perintah utk menyatukan koneksi dg database dg query tabel
// (judul, img, link, deskripsi, jenis) adalah nama field di tabel portfolio (nama2 kolom database)
// ('$vjudul', '$namaimage', '$vlink', '$vdeskripsi', '$vtype') adalah variabel diatas yg sdh kt bikin sblmynya

// utk mengupload foto digunakan fungsi move_uploaded_file()
move_uploaded_file($_FILES['img']['tmp_name'], $path . $namaimage);

$sql_insert = mysqli_query($koneksi, "INSERT INTO portfolio (judul_portfolio, img, link, deskripsi, jenis)
VALUES ('$vjudul', '$namaimage', '$vlink', '$vdeskripsi', '$vtype')");   

// header location fungsinya untuk mengarahkan ke file tabel_portfolio.php setelah data berhasil disimpan
header("Location:tabel_portfolio.php");
