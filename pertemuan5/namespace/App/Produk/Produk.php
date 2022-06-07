<?php

Abstract class Produk {

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