<?php

class Produk {

    public $judul, 
            $penulis, 
            $penerbit, 
            $harga,
            $jmlHalaman,
            $jmlWaktu,
            $tipe;

    public function __construct( $judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0, $jmlWaktu = 0, $tipe = "" ) {
        $this->judul =   $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->jmlWaktu = $jmlWaktu;
        $this->tipe = $tipe;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap() {
        $str = " {$this->tipe}: {$this->judul} | {$this->getLabel()}, (Rp. {$this->harga}) ";
        if ( $this->tipe == "Komik" ) {
            $str .= "- {$this->jmlHalaman} Halaman.";
        } else if ( $this->tipe == "Game") {
            $str .= "~ {$this->jmlWaktu} Jam.";
        }
        return $str;
    }

}

class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("One Piece", "Eiichiro Oda", "Elex Media", 30000, 100, 0, "Komik");
$produk2 = new Produk("Uncharted", "Niel Durckman", "Sony Computer", 250000, 0, 50, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();


// Komik: One Piece, Eiichiro Oda, Elez Media, (Rp. 30000) - 100 Halaman.
// Game: Uncharted, Niel Druckman, Sony Computer, (Rp. 250000) ~ 50 Jam.