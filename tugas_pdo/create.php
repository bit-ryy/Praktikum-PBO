<?php
require_once 'Product.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product = new Product();

    $product->nama_produk = $_POST['nama_produk'];
    $product->harga = $_POST['harga'];
    $product->stok = $_POST['stok'];
    
    if ($product->save()) {
        echo "<script>alert('Produk berhasil ditambahkan!'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Gagal menambahkan produk.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Tambah Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .form-group {
            margin-bottom: 15px;
            max-width: 400px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        button {
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        button:hover {
            background-color: #0056b3;
        }

        .btn-kembali {
            display: inline-block;
            margin-top: 15px;
            text-decoration: none;
            color: #555;
        }
    </style>
</head>

<body>

    <h2>Tambah Produk Baru</h2>

    <form action="create.php" method="POST">
        <div class="form-group">
            <label for="nama_produk">Nama Produk:</label>
            <input type="text" id="nama_produk" name="nama_produk" required>
        </div>
        <div class="form-group">
            <label for="harga">Harga (Rp):</label>
            <input type="number" id="harga" name="harga" required>
        </div>
        <div class="form-group">
            <label for="stok">Stok:</label>
            <input type="number" id="stok" name="stok" required>
        </div>
        <button type="submit">Simpan Produk</button>
    </form>

    <a href="index.php" class="btn-kembali">&larr; Kembali ke Daftar Produk</a>

</body>

</html>