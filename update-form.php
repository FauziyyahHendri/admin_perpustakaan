<?php

include 'php/koneksi.php';

$id = $_GET['id'];

$query = mysqli_query(
    $koneksi,
    "SELECT * FROM data_buku WHERE id='$id'"
);

$data = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Buku</title>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>

<div class="container">

    <h2>Edit Buku</h2>

    <form action="php/update.php" method="POST">

        <input
            type="hidden"
            name="id"
            value="<?= $data['id']; ?>"
        >

        <label>Judul</label>
        <input
            type="text"
            name="judul"
            value="<?= $data['judul']; ?>"
            required
        >

        <label>Penulis</label>
        <input
            type="text"
            name="penulis"
            value="<?= $data['penulis']; ?>"
            required
        >

        <label>Kategori</label>

        <input
            type="text"
            name="kategori"
            value="<?= $data['kategori']; ?>"
            required
        >

        <label>Stok</label>

        <input
            type="number"
            name="stok"
            value="<?= $data['stok']; ?>"
            required
        >

        <button type="submit">
            Update Data
        </button>

    </form>

</div>

</body>
</html>