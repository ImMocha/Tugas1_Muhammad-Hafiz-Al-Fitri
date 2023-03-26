<?php 
require '../conn/koneksi.php';

// Menangkap Data Yang dikirim Menggunakan $_GET
$nip = $_GET["nip"];

// Jalankan Function hapus($no)
if(hapus($nip) > 0) {
    header('location:../index.php');
}

?>