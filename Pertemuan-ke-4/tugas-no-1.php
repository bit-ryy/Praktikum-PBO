<?php

class Mobil {
    // ubah properti jadi private
    private $merek;
    private $warna;
    private $kecepatan;

    public function __construct($merek, $warna, $kecepatan) {
        $this->merek = $merek;
        // langsung pakai setter di dalam constructor agar validasi tetap jalan saat objek pertama kali dibuat
        $this->setWarna($warna);
        $this->setKecepatan($kecepatan);
    }

    // buat method getter utk setiap properti
    public function getMerek() {
        return $this->merek;
    }
    public function getWarna() {
        return $this->warna;
    }
    public function getKecepatan() {
        return $this->kecepatan;
    }

    // buat method setter utk kecepatan dengan validasi
    public function setKecepatan($kecepatan) {
        // kecepatan tdk boleh negatif dan max 200 km/jam
        if ($kecepatan >= 0 && $kecepatan <= 200) {
            $this->kecepatan = $kecepatan;
        } else {
            echo "Error: Kecepatan tidak valid! Harus antara 0-200 km/jam.<br>";
        }
    }
    // buat method setter utk warna dengan validasi
    public function setWarna($warna) {
        // warna tdk boleh kosong dan minimal 3 karakter
        // fungsi kode $warna != "" itu utk memastikan string tdk kosong
        // fungsi kode strlen($warna) >= 3 itu utk memastikan jumlah hurufnya minimal 3
        if ($warna != "" && strlen($warna) >= 3) {
            $this->warna = $warna;
        } else {
            echo "Error: Warna tidak valid! Tidak boleh kosong dan minimal 3 karakter.<br>";
        }
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

// tampilkan hasilnya di browser
echo "<b>======= Uji Instansiasi Awal =======</b><br>";
$mobil1 = new Mobil("Toyota", "Merah", 120);
echo $mobil1->getInfo() . "<br><br>";

echo "<b>======= Uji Method Getter =======</b><br>";
echo "Merek dipanggil pakai getter : " . $mobil1->getMerek() . "<br>";
echo "Warna dipanggil pakai getter : " . $mobil1->getWarna() . "<br>";
echo "Kecepatan dipanggil pakai getter : " . $mobil1->getKecepatan() . " km/jam<br><br>";

echo "<b>======= Uji Method Setter (Picu Validasi Error) =======</b><br>";
// uji batas kecepatan
$mobil1->setKecepatan(250); // akan error karena lebih dari 200
$mobil1->setKecepatan(-50); // akan error karena negatif

// uji batas karakter warna
$mobil1->setWarna("Ab"); // Akan error karena kurang dari 3 karakter
$mobil1->setWarna(""); // Akan error karena kosong
echo "<br>";

echo "<b>======= Uji Method Setter (Data Valid) =======</b><br>";
$mobil1->setKecepatan(180); // sukses mengubah kecepatan
$mobil1->setWarna("Hitam"); // sukses mengubah warna
echo $mobil1->getInfo() . "<br>";

?>