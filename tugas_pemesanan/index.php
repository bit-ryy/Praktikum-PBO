<?php

require_once 'Menu.php';
require_once 'Pesanan.php';
require_once 'Pelanggan.php';

echo "===== SISTEM PEMESANAN MAKANAN =====<br><br>";

$menu1 = new Menu("M001", "Nasi Goreng Spesial", 25000, 21);
$menu2 = new Menu("M002", "Es Teh Manis", 5000, 43);

echo "DAFTAR MENU AWAL:<br>";
echo $menu1->getInfoMenu() . "<br>";
echo $menu2->getInfoMenu() . "<br><br>";

$pelanggan1 = new Pelanggan("P001", "Jacobi", "081234567890", "Ngawi Barat");

echo "INFORMASI PELANGGAN:<br>";
echo $pelanggan1->getInfoPelanggan() . "<br><br>";

$pesanan1 = $pelanggan1->buatPesanan("ORD-123", "28-10-2026"); 

$pesanan1->tambahMenu($menu1);
$menu1->updateStok(-1);

$pesanan1->tambahMenu($menu2);
$menu2->updateStok(-1);

echo "===== STRUK PESANAN =====<br>";
echo "No Pesanan: " . $pesanan1->getNoPesanan() . "<br>";
echo "Tanggal Pesanan: " . $pesanan1->getTanggalPemesanan() . "<br>";
echo "Nama Pemesan: " . $pelanggan1->getNama() . "<br>";
echo "Status Awal: " . $pesanan1->getStatus() . "<br>";
echo "Item yang dipesan:<br>";

foreach ($pesanan1->getDaftarMenu() as $item) {
    echo "- " . $item->getNamaMenu() . " (Rp" . $item->getHarga() . ")<br>";
}

echo "Total Bayar: Rp" . $pesanan1->hitungTotal() . "<br><br>";

$pesanan1->updateStatus("Selesai (Dihidangkan)");
echo "Status Akhir: " . $pesanan1->getStatus() . "<br><br>";

echo "SISA STOK MENU SETELAH PESANAN:<br>";
echo $menu1->getInfoMenu() . "<br>";
echo $menu2->getInfoMenu() . "<br>";

?>