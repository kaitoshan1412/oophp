<?php
/* Interface
-Kelas Abstrak yang sama sekali tidak memiliki implementasi
-Murni merupakan template untuk kelas turunannya
-Tidak boleh memiliki properti, hanya deklarasi method saja
-Semua method harus dideklarasikan visibility Public
-Boleh mendeklarasikan __construct()
-Satu kelas boleh mengimplementasikan banyak interface
-Dengan menggunakan type-hinting(sebuah objek bisa dijadikan parameter) dapat melakukan Dependency Injection(memaksakan method menerima parameter menjadi objek)
-Pada akhirnya mencapai Polymorphism
*/


// interface
interface InfoProduk {
    public function getInfoProduk();

}

abstract class Produk {

    // private untuk satu class, protected untuk keturunan, public untuk semua
    protected $judul, 
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

    abstract public function getInfo();

    // Akhir setter geter

}

class Komik extends Produk implements InfoProduk {
    public $jmlHalaman;

    public function __construct( $judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0 ) {
        parent::__construct( $judul, $penulis, $penerbit, $harga );
        $this->jmlHalaman = $jmlHalaman;
        
    }

    public function getInfo() {
        $str = " {$this->judul} | {$this->getLabel()}, (Rp. {$this->harga}) ";
        return $str;
    }

    public function getInfoProduk() {
        $str = "Komik: " . $this->getInfo() . " - {$this->jmlHalaman} Halaman. ";
        return $str;
    }
}

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