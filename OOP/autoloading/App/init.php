<?php 
// require_once 'Mahasiswa/InfoMahasiswa.php';
// require_once 'Mahasiswa/Mahasiswa.php';
// require_once 'Mahasiswa/Aktif.php';
// require_once 'Mahasiswa/Terminal.php';
// require_once 'Mahasiswa/CetakInfoMahasiswa.php';


spl_autoload_register(function ($class) {
    require_once 'Mahasiswa/' . $class . '.php';
});