<?php

class Mobil {
    public $merek;
    public $warna;
    public $kecepatan;

    public function __construct($merek, $warna, $kecepatan) {
        $this->merek = $merek;
        $this->warna = $warna;
        $this->kecepatan = $kecepatan;
    }

    public function getInfo() {
        return "Mobil $this->merek berwarna $this->warna dengan kecepatan $this->kecepatan km/jam.";
    }

    public function jalankan() {
        return "Mobil berjalan...";
    }

    public function berhenti() {
        return "Mobil berhenti";
    }
}

$mobil1 = new Mobil("Toyota", "Merah", 120);
$mobil2 = new Mobil("Honda", "Hitam", 150);
$mobil3 = new Mobil("Daihatsu", "Putih", 100);

echo "<b>===== Info Mobil 1 =====</b><br>";
echo $mobil1->getInfo() . "<br>";
echo $mobil1->jalankan() . "<br><br>";

echo "<b>===== Info Mobil 2 =====</b><br>";
echo $mobil2->getInfo() . "<br>";
echo $mobil2->berhenti() . "<br><br>";

echo "<b>===== Info Mobil 3 =====</b><br>";
echo $mobil3->getInfo() . "<br>";
echo $mobil3->jalankan() . "<br>";

?>