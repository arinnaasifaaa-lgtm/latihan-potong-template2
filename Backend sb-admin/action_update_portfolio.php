<?php
include "connection.php";   

// $vnama utk penyimpanan sdngkn $_post menerima inputan name="name dr update form
$id_portfolio = $_POST['id_portfolio'];
$vjudul = $_POST['judul_portfolio'];

// utk membuat nama random menggunakan time(); dan ekstensi ".jpg"
$vlink = $_POST['link'];
$vdeskripsi = $_POST['deskripsi'];
$vtype = $_POST['jenis'];

// utk menyimpan file foto yg nnti kta tmbahkan dr form_portfolio
$namaimage = time() . ".jpg";
$path = "foto/";

// update tanpa fot. yg mau di update adl keterangan sja selain foto.
if (empty($_FILES['img']['name'])){
    $sql_update_portfolio_no_image = mysqli_query($koneksi, "UPDATE portfolio SET
    judul_portfolio='$vjudul', link='$vlink' , deskripsi='$vdeskripsi',
    jenis='$vtype' WHERE id_portfolio='$id_portfolio'");
} else {
    // update menggunakan foto

    // upload foto baru yg dimasukkan dr update_form_portfolio.php
    move_uploaded_file($_FILES['img']['tmp_name'], $path . $namaimage);

    // hapus foto lama start
    $imgportfolio = mysqli_query($koneksi, "SELECT * FROM portfolio WHERE
    id_portfolio IN ('$id_portfolio')");

    // tampilkan foto
    $img = mysqli_fetch_object($imgportfolio);

    $path = "foto/";

    // is_file gunanya utk mengecek terlebih dahulu file di folder foto sblm dihapus
    // unlink gunanya utk menghapus fotonya
    if (is_file($path . $img->img)) {
        unlink($path . $img->img);
    }
    // hps foto lama end

    // update dg menggunakan foto dg menambahkan img='$namaimage'
    $update_portfolio = mysqli_query($koneksi, "UPDATE portfolio SET judul_portfolio='$vjudul',
    link='$vlink', deskripsi='$vdeskripsi', jenis='$vtype', img='$namaimage' WHERE id_portfolio='$id_portfolio'");  
}
header("Location:tabel_portfolio.php");
