<?php
include 'php/pagination.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Perpustakaan</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>

    <nav class="navbar">

        <h1>Admin Perpustakaan</h1>

        <ul class="nav-menu">
            <li>
                <a href="dashboard.php">Dashboard</a>
            </li>
        </ul>

    </nav>

</header>

<main>

    <section class="welcome">
        <h1>Dashboard</h1>
    </section>

    <section class="table-container">

        <div class="table-header">

            <h2>Data Buku</h2>

            <div class="header-right">

                <form action="" method="GET">

                    <input
                        type="text"
                        name="cari"
                        class="search"
                        placeholder="Cari judul, penulis atau kategori..."
                        value="<?= isset($_GET['cari']) ? $_GET['cari'] : ''; ?>"
                    >

                </form>

                <a href="form.php" class="btn-tambah">
                    + Tambah Buku
                </a>

            </div>

        </div>

        <table>

            <thead>

                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Kategori</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>

            </thead>

            <tbody>

                <?php
                $no = $halaman_awal + 1;

                while($data = mysqli_fetch_array($query_data)){
                ?>

                <tr>

                    <td><?= $no++; ?></td>

                    <td><?= $data['judul']; ?></td>

                    <td><?= $data['penulis']; ?></td>

                    <td><?= $data['kategori']; ?></td>

                    <td><?= $data['stok']; ?></td>

                    <td>

                        <div class="aksi-btn">

                            <a
                                href="update-form.php?id=<?= $data['id']; ?>"
                                class="edit">
                                Edit
                            </a>

                            <a
                                href="php/delete.php?id=<?= $data['id']; ?>"
                                class="hapus"
                                onclick="return confirm('Yakin hapus data?')">
                                Hapus
                            </a>

                        </div>

                    </td>

                </tr>

                <?php } ?>

            </tbody>

        </table>

        <!-- PAGINATION -->

        <div class="pagination">

            <?php
            for($i = 1; $i <= $total_halaman; $i++){
            ?>

                <a href="?halaman=<?= $i; ?>&cari=<?= isset($_GET['cari']) ? $_GET['cari'] : ''; ?>">

                    <?= $i; ?>

                </a>

            <?php } ?>

        </div>

    </section>

</main>

</body>
</html>