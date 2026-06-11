<?php

include 'koneksi.php';

$id = $_POST['id'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$kategori = $_POST['kategori'];
$stok = $_POST['stok'];

$query = mysqli_query(
    $koneksi,
    "UPDATE data_buku
    SET
    judul='$judul',
    penulis='$penulis',
    kategori='$kategori',
    stok='$stok'
    WHERE id='$id'"
);

if($query){

    header("Location: ../dashboard.php");

}else{

    echo "Data gagal diupdate";

}

?>