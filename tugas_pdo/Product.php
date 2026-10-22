<?php
require_once 'DatabaseConnection.php';

class Product
{
    private $conn;
    public $nama_produk;
    public $harga;
    public $stok;

    public function __construct()
    {   
        $this->conn = DatabaseConnection::getConnection();
    }

    public function save()
    {
        $query = "INSERT INTO products (nama_produk, harga, stok) VALUES (:nama, :harga, :stok)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nama', $this->nama_produk);
        $stmt->bindParam(':harga', $this->harga);
        $stmt->bindParam(':stok', $this->stok);
        return $stmt->execute();
    }

    public static function findAll()
    {
        $conn = DatabaseConnection::getConnection();
        $query = "SELECT * FROM products ORDER BY id DESC";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function findById($id)
    {
        $conn = DatabaseConnection::getConnection();
        $query = "SELECT * FROM products WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id)
    {
        $query = "UPDATE products SET nama_produk = :nama, harga = :harga, stok = :stok WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nama', $this->nama_produk);
        $stmt->bindParam(':harga', $this->harga);
        $stmt->bindParam(':stok', $this->stok);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public static function delete($id)
    {
        $conn = DatabaseConnection::getConnection();
        $query = "DELETE FROM products WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}