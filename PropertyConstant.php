<?php

namespace PBO\Marketplace;

class Produk {

    //Property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    public const PAJAK = 0.11;

    public function __construct($kode, $nama, $harga, $stok) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }
    
    public function pajak() {
        return self::PAJAK * 100;
    }
    public function total() {
        return $this->harga + ($this->harga * self::PAJAK);
    }
}

//hitung pajak
//$pajak = Produk::PAJAK * 100;
//$JumlahPajak = $produk->harga * Produk::PAJAK;

//total harga
//$total = $produk->harga + $JumlahPajak;

//hasil




