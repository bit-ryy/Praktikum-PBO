<?php

abstract class KendaraanParkir {
    protected $id;
    protected $nama;
    protected $hargaDasar;

    public function __construct($id, $nama, $hargaDasar) {
        $this->id = $id;
        $this->nama = $nama;
        $this->hargaDasar = $hargaDasar;
    }

    public function getId() {
        return $this->id;
    }
    public function getNama() {
        return $this->nama;
    }
    public function getHargaDasar() {
        return $this->hargaDasar;
    }

    abstract public function hitungTotal(); 
    abstract public function getJenis();
}

class Mobil extends KendaraanParkir {
    private $jam;

    public function __construct($id, $nama, $hargaDasar, $jam) {
        parent::__construct($id, $nama, $hargaDasar);
        $this->jam = $jam;
    }

    public function getJenis() {
        return "Mobil";
    }

    public function hitungTotal() {
        return $this->hargaDasar + (2000 * $this->jam);
    }
}

class Motor extends KendaraanParkir {
    private $jam;

    public function __construct($id, $nama, $hargaDasar, $jam) {
        parent::__construct($id, $nama, $hargaDasar);
        $this->jam = $jam;
    }

    public function getJenis() {
        return "Motor";
    }

    public function hitungTotal() {
        return $this->hargaDasar + (1000 * $this->jam);
    }
}

class Bus extends KendaraanParkir {
    private $jam;

    public function __construct($id, $nama, $hargaDasar, $jam) {
        parent::__construct($id, $nama, $hargaDasar);
        $this->jam = $jam;
    }

    public function getJenis() {
        return "Bus";
    }

    public function hitungTotal() {
        $total = $this->hargaDasar + (10000 * $this->jam);
        if ($this->jam > 5) {
            $total = $total-($total * 0.20);
        }
        return $total;
    }
}

$parkiran = [
    new Motor("P01", "Roby", 2000, 4),
    new Mobil("P02", "Reza", 5000, 3),
    new Bus("P03", "Anton", 15000, 6),
    new Mobil("P04", "Jacobi", 5000, 2),
    new Motor("P05", "Netanyahu", 2000, 1)
];

$Total = 0;
foreach ($parkiran as $k) {
    $total = $k->hitungTotal();
    $Total += $total;
    
    echo "ID: " . $k->getId() . " | ";
    echo "Nama: " . $k->getNama() . " | ";
    echo "Jenis: " . $k->getJenis() . " | ";
    echo "Harga Dasar: Rp" . $k->getHargaDasar() . " | ";
    echo "Total: Rp" . $total . "<br>";
}

echo "<br>Total Keseluruhan : Rp" . $Total . "<br>";

?>