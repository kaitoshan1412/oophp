<?php

class Game extends Produk implements InfoProduk {
    public $jmlWaktu;

    public function __construct( $judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlWaktu = 0 ) {
        parent::__construct( $judul, $penulis, $penerbit, $harga );
        $this->jmlWaktu = $jmlWaktu;
        
    }

    public function getInfo() {
        $str = " {$this->judul} | {$this->getLabel()}, (Rp. {$this->harga}) ";
        return $str;
    }

    public function getInfoProduk() {
        $str = "Komik: " . $this->getInfo() . " ~ {$this->jmlWaktu} Jam. ";
        return $str;
    }
}