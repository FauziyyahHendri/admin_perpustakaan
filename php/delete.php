<?php

include 'koneksi.php';

// mengambil nilai id dari URL

$id = $_GET['id'];

$query = mysqli_query(
    $koneksi,
    "DELETE FROM data_buku WHERE id='$id'"
);

if($query){
    header("Location: ../dashboard.php");
}else{
    echo "Gagal menghapus data";
}

?>