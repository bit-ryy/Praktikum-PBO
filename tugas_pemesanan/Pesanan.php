<?php

require_once 'Menu.php';

class Pesanan
{
    private string $noPesanan;
    private string $tanggalPemesanan;
    private string $statusPesanan;

    private array $daftarMenu = [];

    public function __construct(string $noPesanan, string $tanggalPemesanan, string $statusPesanan)
    {
        $this->noPesanan = $noPesanan;
        $this->tanggalPemesanan = $tanggalPemesanan;
        $this->statusPesanan = $statusPesanan;
    }

    public function tambahMenu(Menu $menu): void
    {
        $this->daftarMenu[] = $menu;
    }

    public function updateStatus(string $statusBaru): void
    {
        $this->statusPesanan = $statusBaru;
    }

    public function hitungTotal(): float
    {
        $total = 0;
        foreach ($this->daftarMenu as $item) {
            $total += $item->getHarga();
        }
        return $total;
    }

    public function getNoPesanan(): string
    {
        return $this->noPesanan;
    }

    public function getStatus(): string
    {
        return $this->statusPesanan;
    }

    public function getDaftarMenu(): array
    {
        return $this->daftarMenu;
    }

    public function getTanggalPemesanan(): string
    {
        return $this->tanggalPemesanan;
    }
}
