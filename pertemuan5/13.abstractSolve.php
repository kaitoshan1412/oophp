<?php


// abstrcat 1
abstract class Produk {

    // private untuk satu class, protected untuk keturunan, public untuk semua
    private $judul, 
            $penulis, 
            $penerbit,
            $diskon = 0,
            $harga;

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

    // 2
    abstract public function getInfoProduk();

    public function getInfo()  {
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

    // 3
    public function getInfoProduk() {
        $str = "Komik: " . $this->getInfo() . " - {$this->jmlHalaman} Halaman. ";
        return $str;
    }
}

class Game extends Produk {
    public $jmlWaktu;

    public function __construct( $judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlWaktu = 0 ) {
        parent::__construct( $judul, $penulis, $penerbit, $harga );
        $this->jmlWaktu = $jmlWaktu;
        
    }

    // 4
    public function getInfoProduk() {
        $str = "Komik: " . $this->getInfo() . " ~ {$this->jmlWaktu} Jam. ";
        return $str;
    }
}

// End of Overidding

class CetakInfoProduk {
    public $daftarProduk = array();

    public function tambahProduk( Produk $produk ) {
        $this->daftarProduk[] = $produk;
    }

    public function cetak() {
        $str = "DAFTAR PRODUK: <br>";
        foreach( $this->daftarProduk as $p ) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}


$produk1 = new Komik("One Piece", "Eiichiro Oda", "Elex Media", 30000, 100);
$produk2 = new Game("Uncharted", "Niel Durckman", "Sony Computer", 250000, 50);

$cetakProduk = new cetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();