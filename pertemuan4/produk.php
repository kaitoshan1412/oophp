<?php

class Produk {

    public $judul = "Judul", 
            $penulis = "Penulis", 
            $penerbit = "Penerbit", 
            $harga = 0;

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// $produk2->tambahProperty = "Test";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "One Piece";
$produk3->penulis = "Eiichiro Oda";
$produk3->penerbit = "Elex Media";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

echo "Komik: ".$produk3->getLabel();
echo "<br>";
echo "Game: ".$produk4->getLabel(); 