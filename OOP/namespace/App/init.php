<?php 
// require_once 'Mahasiswa/InfoMahasiswa.php';
// require_once 'Mahasiswa/Mahasiswa.php';
// require_once 'Mahasiswa/Aktif.php';
// require_once 'Mahasiswa/Terminal.php';
// require_once 'Mahasiswa/CetakInfoMahasiswa.php';

// require_once 'Dosen/User.php';
// require_once 'Mahasiswa/User.php';


spl_autoload_register(function ($class) {
    // App\Mahasiswa\User
    $class = explode('\\',$class);
    $class = end($class);

    require_once 'Mahasiswa/' . $class . '.php';
});

spl_autoload_register(function ($class) {
    // App\Mahasiswa\User
    $class = explode('\\',$class);
    $class = end($class);

    require_once 'Dosen/' . $class . '.php';
});