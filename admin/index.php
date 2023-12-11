<?php
// index.php

// Mendapatkan nilai dari query parameter 'page'
$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

// Memuat file konten sesuai dengan nilai 'page'
switch ($page) {
    case 'dashboard':
        $content = 'dashboard.php';
        break;
    case 'peserta':
        $content = 'peserta.php';
        break;
    case 'user':
        $content = 'user.php';
        break;
    default:
        $content = '404.php'; // Halaman tidak ditemukan
        break;
}

// Memuat header
include('./sidePages/header.php');

// Memuat Navbar
include('./sidePages/navbar.php');

// Memuat konten
include($content);

// Memuat footer
include('./sidePages/footer.php');
?>
