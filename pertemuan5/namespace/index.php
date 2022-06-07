<?php

require_once 'App/Init.php';

// $produk1 = new Komik("One Piece", "Eiichiro Oda", "Elex Media", 30000, 100);
// $produk2 = new Game("Uncharted", "Niel Durckman", "Sony Computer", 250000, 50);

// $cetakProduk = new cetakInfoProduk();
// $cetakProduk->tambahProduk( $produk1 );
// $cetakProduk->tambahProduk( $produk2 );
// echo $cetakProduk->cetak();

new App\Service\User();
echo "<br>";
new App\Produk\User();
echo "<hr>";

// Alias

use \App\Produk\User as ProdukUser;
use \App\Service\User as ServiceUser;

new ProdukUser;
echo "<br>";
new ServiceUser;