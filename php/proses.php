<?php

include 'koneksi.php';

// mengambil data dari form
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$kategori = $_POST['kategori'];
$stok = $_POST['stok'];

//query simpan data
$query = "INSERT INTO data_buku
(judul, penulis, kategori, stok)

VALUES
('$judul', '$penulis', '$kategori', '$stok')";

// menjalankan query
$simpan = mysqli_query($koneksi, $query);

// cek berhasil atau tidak
if($simpan){
    header("Location: ../dashboard.php");
}else{
    echo "Data gagal disimpan";
}

?>
