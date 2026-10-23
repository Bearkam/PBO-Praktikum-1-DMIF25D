<?php

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

$produk = new Produk("P0001", "Laptop", 1000000, 5);


//hitung pajak
//$pajak = Produk::PAJAK * 100;
//$JumlahPajak = $produk->harga * Produk::PAJAK;

//total harga
//$total = $produk->harga + $JumlahPajak;

//hasil
echo "Produk: ". $produk->nama;
echo "<br/>";

echo "Harga: Rp.". $produk->harga;
echo "<br/>";

echo "Stok: ". $produk->stok;
echo "<br/>";

echo "Pajak:". $produk->pajak() . "%";
echo "<br/>";

echo "Total harga setelah pajak: Rp.". $produk->total();



