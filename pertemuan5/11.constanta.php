<?php

/*
Constanta: Nilai tak dapat berubah (namakan dia denga huruf besar)
Jenis: define() & const
*/

// define:ttidak bisa disimpan dalam class

/* define('NAMA', 'Ihsan Ali');
echo NAMA;

echo "<br>";

// const: bisa disimpan dalam class
const UMUR = 20;
echo UMUR; */


// contoh
// class Coba {
//     // define('NAMA', 'Ihsan Ali');
//     const NAMA = 'Ihsan Ali';

// }
// // Define: ( ! ) Parse error: syntax error, unexpected identifier "define", expecting "function" or "const" in C:\xampp\htdocs\xampp\oophp\pertemuan5\11.constanta.php on line 21

// echo Coba::NAMA;

/*
Magic Constant
__LINE__
__FILE__
__DIR__
__FUNCTION__
__CLASS__
__TRAIT__
__METHOD__
__NAMESPACE__
*/

echo __FILE__;