<?php

interface Bentuk {
    public function hitungLuas();
}

class Persegi implements Bentuk {
    private $sisi;

    public function __construct($sisi) {
        $this->sisi = $sisi;
    }

    public function hitungLuas() {
        $luas = $this->sisi * $this->sisi;
        echo "Luas Persegi (sisi={$this->sisi}): " . $luas . "<br>";
    }
}

class Lingkaran implements Bentuk {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function hitungLuas() {
        // menggunakan nilai phi 3.14 supaya hasilnya pas 153.86
        $luas = 3.14 * $this->radius * $this->radius; 
        echo "Luas Lingkaran (radius={$this->radius}): " . $luas . "<br>";
    }
}

$bentukArray = [new Persegi(5), new Lingkaran(7)];
foreach ($bentukArray as $item) {
    $item->hitungLuas();
}

?>