<?php
session_start();

// Menghapus semua session
session_destroy();

// Kembali ke halaman login dengan pesan logout
header("Location:login.php?pesan=logout");

?>