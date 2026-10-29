<?php

class Menu
{
    private string $kodeMenu;
    private string $namaMenu;
    private float $harga;
    private int $stok;

    public function __construct(string $kodeMenu, string $namaMenu, float $harga, int $stok)
    {
        $this->kodeMenu = $kodeMenu;
        $this->namaMenu = $namaMenu;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    public function getInfoMenu(): string
    {
        return "Menu: {$this->namaMenu} | Harga: Rp" . $this->harga . " | Stok: {$this->stok}";
    }

    public function updateStok(int $jumlah): void
    {
        $this->stok += $jumlah;
    }
    
    public function getHarga(): float
    {
        return $this->harga;
    }

    public function getNamaMenu(): string
    {
        return $this->namaMenu;
    }
}
