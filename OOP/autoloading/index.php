<?php 

require_once 'App/init.php';


$mahasiswa1 = new Aktif("Muhammad Hafiz Al Fitri", "E020321015","Abdul Rozaq",3,8);
$mahasiswa2 = new Aktif("Pretty Swastika", "E020321024","Evi Lestari",4,5);
$mahasiswa3 = new Terminal("Andre", "E020321030", "Sari Hepi",6,4,0);
$mahasiswa4 = new Terminal("Faisal", "E020321014", "Sa'id Ramadhan",2,2,0);

$CetakMahasiswa = new CetakInfoMahasiswa;

$CetakMahasiswa -> tambahMahasiswa($mahasiswa1);
$CetakMahasiswa -> tambahMahasiswa($mahasiswa2);
$CetakMahasiswa -> tambahMahasiswa($mahasiswa3);
$CetakMahasiswa -> tambahMahasiswa($mahasiswa4);

echo $CetakMahasiswa -> cetak();