<?php
session_start();

// 1. Bersihkan semua isi variabel session
$_SESSION = array();

// 2. Hancurkan session dari server
session_destroy();

// 3. Tendang balik ke halaman login
header("Location: login.php?pesan=logout");
exit(); // Wajib ditambahkan agar script langsung berhenti total
?>