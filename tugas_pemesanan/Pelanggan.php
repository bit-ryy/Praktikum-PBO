<?php

require_once 'Pesanan.php';

class Pelanggan
{
    private string $idPelanggan;
    private string $nama;
    private string $noTelepon;
    private string $alamat;

    public function __construct(string $idPelanggan, string $nama, string $noTelepon, string $alamat)
    {
        $this->idPelanggan = $idPelanggan;
        $this->nama = $nama;
        $this->noTelepon = $noTelepon;
        $this->alamat = $alamat;
    }

    public function getInfoPelanggan(): string
    {
        return "ID: {$this->idPelanggan} | Nama: {$this->nama} | Telp: {$this->noTelepon} | Alamat: {$this->alamat}";
    }

    public function buatPesanan(string $noPesanan, string $tanggalPemesanan): Pesanan
    {
        return new Pesanan($noPesanan, $tanggalPemesanan, "Menunggu Konfirmasi");
    }

    public function getNama(): string
    {
        return $this->nama;
    }
}
