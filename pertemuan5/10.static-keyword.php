<?php

/*
Static Keyword
- Member yang terikat dengan class, bukan dengan object
- Nilai static akan sealu tetap meskipn object di-instansiasi berulang kali
- membuat kode menjadi 'prosedural'


*/

// disc: poin pertama

// class contohStatic {
//     public static $angka = 1;

//     public static function halo() {
//         return "halo " . self::$angka++ . " Kali.";
//     }
// }

// echo contohStatic::$angka;
// echo "<br>";
// echo contohStatic::halo();
// echo "<hr>";
// echo contohStatic::halo();


//
class Contoh {
    // public $angka = 1;
    public static $angka = 1;

    public function halo() {
        // return "halo " . $this->angka++ . " kali. <br>";
        return "halo " . self::$angka++ . " kali. <br>";
    }
}

// disc: nilai angka tidak direset (poin ke 2)
$obj = new Contoh();
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh();
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();