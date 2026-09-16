<?php

class Produk {
    protected $nama;
    protected $merek;
    protected $harga;

    public function __construct($nama, $merek, $harga) {
        $this->nama = $nama;
        $this->merek = $merek;
        
        if (is_numeric($harga) && $harga > 0) {
            $this->harga = $harga;
        } else {
            echo "Error: Harga untuk {$this->nama} tidak valid! Harus berupa angka dan lebih dari 0.<br>";
            $this->harga = 0; // memberikan nilai default 0 jika input salah
        }
    }

    public function getInfo() {
        // format angka untuk memunculkan titik pada ribuan (contoh: 3.500)
        $hargaFormat = number_format($this->harga, 0, ',', '.');
        return "Produk: {$this->nama} <br> Merek: {$this->merek} <br> Harga: Rp {$hargaFormat}";
    }
}

class Makanan extends Produk {
    private $tanggalKadaluarsa;

    public function __construct($nama, $merek, $harga, $tanggalKadaluarsa) {
        // menggunakan parent::__construct untuk memanggil constructor induk
        parent::__construct($nama, $merek, $harga);
        $this->tanggalKadaluarsa = $tanggalKadaluarsa;
    }

    public function getInfo() {
        $hargaFormat = number_format($this->harga, 0, ',', '.');
        return "Produk: Makanan - {$this->nama} <br>" . 
               "Merek: {$this->merek} <br>" . 
               "Harga: Rp{$hargaFormat} <br>" . 
               "Tanggal Kadaluarsa: {$this->tanggalKadaluarsa} <br>" . 
               "Status: Segar";
    }
}

class Elektronik extends Produk {
    private $garansi;

    public function __construct($nama, $merek, $harga, $garansi) {
        parent::__construct($nama, $merek, $harga);
        $this->garansi = $garansi;
    }

    public function getInfo() {
        $hargaFormat = number_format($this->harga, 0, ',', '.');
        return "Produk: Elektronik - {$this->nama} <br>" . 
               "Merek: {$this->merek} <br>" . 
               "Harga: Rp{$hargaFormat} <br>" . 
               "Garansi: {$this->garansi} bulan";
    }
}

// tampilkan hasilnya di browser

$mieInstan = new Makanan("Mie Instan", "Indomie", 3500, "2025-06-30");
echo $mieInstan->getInfo() . "<br><br>";

$smartTv = new Elektronik("Smart TV", "Samsung", 5000000, 12);
echo $smartTv->getInfo() . "<br><br>";

// contoh kalau harga diisi minus/salah, bisa dicoba dengan kode di bawah ini
// $errorProduk = new Makanan("Camilan", "Taro", -500, "2026-01-01");
// echo $errorProduk->getInfo() . "<br>";

?>