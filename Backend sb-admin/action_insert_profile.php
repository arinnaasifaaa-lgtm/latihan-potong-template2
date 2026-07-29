<!-- ini adalah langkah kedua setelah dari FORM_PROFILE.PHP --> 
<!-- selanjutnya ke tabel_profile--> 

<?php
// Memanggil koneksi database
include "connection.php";

    // $vnama untuk menyimpan sedangkan $_POST menerima inputan name="nama" dr form_profile.php
    $vnama = $_POST['nama'];
    $vabout = $_POST['about'];
    $vwebsite = $_POST['website'];
    $vphone = $_POST['phone'];
    $vemail = $_POST['email'];
    $vcity = $_POST['address'];
    $vfind_me = $_POST['find_me'];
    $vnationality = $_POST['nationality'];

    // mysqli_query adalah perintah utk menyatukan koneksi database dg query tabel.
    // (nama,about,website,phone,email,city linkedin) adalah nama2 kolom database
    // ('$vnama', '$vabout', '$website','$phone','$email','$city','$linkedin','$nationality') adlh variabel di atas yg sudah kt bikin sblmnya.
    $query = mysqli_query($koneksi, "INSERT INTO profile (nama, about, website, phone, email, address, find_me, nationality)
    VALUES ('$vnama', '$vabout', '$vwebsite', '$vphone', '$vemail', '$vcity', '$vfind_me', '$vnationality')");

    // header location utk memngarahkan ke halaman tabel_profile
       header("Location: tabel_profile.php");
     