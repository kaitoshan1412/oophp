<?php

class Produk {

    public $judul, 
            $penulis, 
            $penerbit, 
            $harga,
            $jmlHalaman,
            $jmlWaktu;

    public function __construct( $judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0, $jmlWaktu = 0 ) {
        $this->judul =   $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->jmlWaktu = $jmlWaktu;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
        $str = " {$this->judul} | {$this->getLabel()}, (Rp. {$this->harga}) ";
        return $str;
    }

}

class Komik extends Produk {
    public function getInfoProduk() {
        $str = "Komik: {$this->judul} | {$this->getLabel()}, (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman. ";
        return $str;
    }
}

class Game extends Produk {
    public function getInfoProduk() {
        $str = "Game: {$this->judul} | {$this->getLabel()}, (Rp. {$this->harga}) ~ {$this->jmlWaktu} Jam. ";
        return $str;
    }
}

class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Komik("One Piece", "Eiichiro Oda", "Elex Media", 30000, 100, 0);
$produk2 = new Game("Uncharted", "Niel Durckman", "Sony Computer", 250000, 0, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();


// Komik: One Piece, Eiichiro Oda, Elez Media, (Rp. 30000) - 100 Halaman.
// Game: Uncharted, Niel Druckman, Sony Computer, (Rp. 250000) ~ 50 Jam.