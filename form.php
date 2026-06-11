<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Buku</title>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>

<div class="container">

    <h2>Form Buku</h2>

    <form action="php/proses.php" method="POST">

        <label>Judul</label>
        <input type="text" name="judul" placeholder="Masukkan Judul" required>

        <label>Penulis</label>
        <input type="text" name="penulis" placeholder="Masukkan Penulis" required>

        <label>Kategori</label>
        <select name="kategori" required>
            <option value="">Pilih Kategori</option>
            <option value="Novel">Novel</option>
            <option value="Pengembangan Diri">Pengembangan Diri</option>
            <option value="Pendidikan">Pendidikan</option>
        </select>

        <label>Stok Buku</label>
        <input type="number" name="stok" placeholder="0" required>

        <button type="submit" name="simpan">
            Simpan Data
        </button>

    </form>

</div>

</body>
</html>