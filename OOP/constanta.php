<?php 

//Perbedaan Define dan Const  : perilaku dan sifatnya sama saja yang membedakan const dapat dipanggil didalam class sehingga const cocok untuk digunak dalam konsep OOP
const NAMA = 'Hafiz';
echo NAMA;

echo "<hr>";

define('ANGKA',1);
echo ANGKA;

echo "<hr>";


class Coba {
    const NAMA = 'Hafiz Class';
}

echo Coba::NAMA; // Cara Memanggilnya Sama Seperti static








// Magic Constant
// __LINE__
// __FILE__
// __DIR__
// __FUNCTION__
// __CLASS__
// __TRAIT__
// __METHOD__
// __NAMESPACE__

