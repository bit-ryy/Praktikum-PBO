<?php

class Product {
    public $nama;
    public $harga;
    public $kategori;

    public function __construct($nama, $harga, $kategori) {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->kategori = $kategori;
    }

    public function getInfo() {
        $harga_format = "Rp " . number_format($this->harga, 0, ',', '.');
        return "Produk: $this->nama | Kategori: $this->kategori | Harga: $harga_format";
    }

    public function applyDiskon($persen) {
        $potongan = $this->harga * ($persen / 100);
        $this->harga = $this->harga - $potongan;
        return "Diskon $persen% diterapkan.";
    }
}

$produk1 = new Product("Laptop Lenovo Legion", 15000000, "Elektronik");
$produk2 = new Product("Mie Ayam", 15000, "Makanan");

echo "<b>===== Tampilan Awal =====</b><br>";
echo $produk1->getInfo() . "<br>";
echo $produk2->getInfo() . "<br><br>";

// terapkan diskon misalnya laptop diskon 10%, mie ayam diskon 20%)
echo "<b>===== Proses Diskon =====</b><br>";
echo $produk1->nama . ": " . $produk1->applyDiskon(10) . "<br>";
echo $produk2->nama . ": " . $produk2->applyDiskon(20) . "<br><br>";

// buat tampilkan informasi setelah diskon
echo "<b>===== Tampilan Setelah Diskon =====</b><br>";
echo $produk1->getInfo() . "<br>";
echo $produk2->getInfo() . "<br>";

?>