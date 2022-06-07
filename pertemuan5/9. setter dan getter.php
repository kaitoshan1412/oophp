<?php

class Produk {

    // private untuk satu class, protected untuk keturunan, public untuk semua
    private $judul, 
            $penulis, 
            $penerbit,
            $diskon = 0,
            $harga;
            // $jmlHalaman,
            // $jmlWaktu;

    //  Construct parent
    public function __construct( $judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0, $jmlWaktu = 0 ) {
        $this->judul =   $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        // $this->jmlHalaman = $jmlHalaman;
        // $this->jmlWaktu = $jmlWaktu;
    }

    // Akhir cParent


    // Setter and Getter
    public function setJudul($judul) {
        return $this->judul = $judul;
    } 

    public function getJudul() {
        return $this->judul;
    } 

    public function setPenulis($penulis) {
        return $this->penulis = $penulis;
    } 

    public function getPenulis() {
        return $this->penulis;
    } 

    public function setPenerbit($penerbit) {
        return $this->penerbit = $penerbit;
    } 

    public function getPenerbit() {
        return $this->penerbit;
    } 

    public function setHarga($harga) {
        return $this->harga = $harga;
    } 

    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function setDiskon($diskon) {
        return $this->diskon = $diskon;
    } 

    public function getDiskon() {
        return $this->diskon;
    } 

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
        $str = " {$this->judul} | {$this->getLabel()}, (Rp. {$this->harga}) ";
        return $str;
    }

    // Akhir setter geter

}

// Overidding: Memanggil variabel yang sama dengan parent.

class Komik extends Produk {
    public $jmlHalaman;

    public function __construct( $judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0 ) {
        parent::__construct( $judul, $penulis, $penerbit, $harga );
        $this->jmlHalaman = $jmlHalaman;
        
    }

    public function getInfoProduk() {
        $str = "Komik: " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman. ";
        return $str;
    }
}

class Game extends Produk {
    public $jmlWaktu;

    public function __construct( $judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlWaktu = 0 ) {
        parent::__construct( $judul, $penulis, $penerbit, $harga );
        $this->jmlWaktu = $jmlWaktu;
        
    }

    public function getInfoProduk() {
        $str = "Game: " . parent::getInfoProduk() . " ~ {$this->jmlWaktu} Jam. ";
        return $str;
    }
}

// End of Overidding

class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

// Inheritance solution

$produk1 = new Komik("One Piece", "Eiichiro Oda", "Elex Media", 30000, 100);
$produk2 = new Game("Uncharted", "Niel Durckman", "Sony Computer", 250000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();


// Komik: One Piece, Eiichiro Oda, Elez Media, (Rp. 30000) - 100 Halaman.
// Game: Uncharted, Niel Druckman, Sony Computer, (Rp. 250000) ~ 50 Jam.

echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";

$produk1->setPenulis("Ihsan Ali");
echo $produk1->getPenulis();
