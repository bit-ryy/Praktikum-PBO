<?php
require_once 'Product.php';

if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $id = $_GET['id'];
    if (Product::delete($id)) {
        echo "<script>alert('Data berhasil dihapus!'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data.');</script>";
    }
}

$products = Product::findAll();
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Manajemen Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        a {
            text-decoration: none;
            color: blue;
        }

        .btn {
            display: inline-block;
            padding: 8px 12px;
            background-color: #28a745;
            color: white;
            border-radius: 4px;
        }

        .btn-hapus {
            color: red;
        }
    </style>
</head>

<body>

    <h2>Sistem Manajemen Produk</h2>
    <a href="create.php" class="btn">+ Tambah Produk Baru</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($products as $row): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nama_produk'] ?></td>
                <td>Rp <?= number_format($row['harga'], 0, ',', '.') ?></td>
                <td><?= $row['stok'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
                    <a href="index.php?action=delete&id=<?= $row['id'] ?>" class="btn-hapus" onclick="return confirm('Yakin ingin menghapus produk ini?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>