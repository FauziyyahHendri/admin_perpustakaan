<?php

include 'koneksi.php';

// Pagination
$batas = 3;

$halaman = isset($_GET['halaman']) ? $_GET['halaman'] : 1;

$halaman_awal = ($halaman - 1) * $batas;

// Search
$cari = isset($_GET['cari']) ? $_GET['cari'] : '';

// Query data
$query_data = mysqli_query(
    $koneksi,
    "SELECT * FROM data_buku
    WHERE judul LIKE '%$cari%'
    OR penulis LIKE '%$cari%'
    OR kategori LIKE '%$cari%'
    ORDER BY id ASC
    LIMIT $halaman_awal, $batas"
);

// Hitung total data
$query_total = mysqli_query(
    $koneksi,
    "SELECT * FROM data_buku
    WHERE judul LIKE '%$cari%'
    OR penulis LIKE '%$cari%'
    OR kategori LIKE '%$cari%'"
);

$total_data = mysqli_num_rows($query_total);

$total_halaman = ceil($total_data / $batas);

?>