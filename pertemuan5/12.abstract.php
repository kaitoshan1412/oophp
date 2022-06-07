<?php

/*
Abstract Class:
-Sebuah kelas yang tidak dapat di-instansiasi (bisa diinstansiasi dengan kelas turunan)
-Kelas 'abstrak'
-Mendefinisikan interface untk kelas lain yang menjadi turunannya
-beroeran sebagai kerangka dassar untuk kelas turunannya
-memiliki minimal 1 method abstrak
-digunkaan dalam pewarisan / inheritance untuk memksakan implementasi method abstrak yang sama untuk semua kelas turunannya

// 2
-Semua kelas turunan harus mengimplementasikan method abstrak yg ad adi kelas abstraknya
-Kelas abstrak boleh memiliki property / method reguler (Public / private / protected)
-Kelas abstrak boleh memiliki property / static method
*Rasa buah buah apa?, rasa nama buah

kenapa menggunakan kelas abstrak?
- merepresentasikan ide atau konsep dasar
- Composition over inheritance (sebaiknya melakukan komposisi dibanding inheritance, agak aneh kedepannya jika tidak menggnakan hal ini)
- Salah satu cara menerapkan Polimorphism
- Sentralisasi logic
- Mempermudah pengerjaan tim
*/

// class Buah {
//     private $warna;

//     public function makan() {
//         // kunyah
//         // Nyam nyam Nyam
//     }

//     public function setWarna($warna) {
//         $this->warna = $warna;
//     }
// }

// class Apel extends Buah {
//     public function makan() {
//         // Kunyah
//         // Sampai bagian tengah
//     }
// }

// class Jeruk extends Buah {
//     public function makan() {
//         // Kupas
//         // Kunyah
//     }
// }

// $apel = new Apel();
// $apel->makan();

// // ???
// $buah = new Buah();
// $buah->makan();

// kelas abstrak
abstract class Buah {
    private $warna;

    // ini merupakan metode abstrak, hanya interface aja, implementasinya ada di kelas turunan
    abstract public function makan();

    public function setWarna($warna) {
        $this->warna = $warna;
    }
}