<?php

require('./PropertyConstant.php');

use PBO\Marketplace\Produk;


$produk = new Produk("P0001", "Laptop", 1000000, 5);

echo "Produk: ". $produk->nama;
echo "<br/>";

echo "Harga: Rp.". $produk->harga;
echo "<br/>";

echo "Stok: ". $produk->stok;
echo "<br/>";

echo "Pajak:". $produk->pajak() . "%";
echo "<br/>";

echo "Total harga setelah pajak: Rp.". $produk->total();