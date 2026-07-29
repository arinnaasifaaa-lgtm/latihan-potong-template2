<?php
include "connection.php";

$vnama = $_POST['nama'];
$vjabatan = $_POST['jabatan'];
$vcompany = $_POST['company'];
$vphone = $_POST['phone'];
$vemail = $_POST['email'];

$query = mysqli_query($koneksi, "INSERT INTO reference
(nama, jabatan, perusahaan, phone, email)
VALUES
('$vnama', '$vjabatan', '$vcompany', '$vphone', '$vemail')");

header("Location:tabel_reference.php");
?>