<?php 

$host = "localhost";
$username = "root";
$password = "";
$nm_dtb = "kantor";
$db = mysqli_connect($host,$username,$password,$nm_dtb);
    
function query($query) {
    global $db;
    $result = mysqli_query($db,$query);
    $rows = []; 
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[]= $row;
    }
    return $rows;
}

function tambah($data) {
    global $db;
    $nama = $data["nama"];
    $nip = $data["nip"];
    $noHP = $data["nohp"];
    $email = $data["email"];
    $tambah = "INSERT INTO `pegawai` (`nama`, `nip`, `nohp`, `email`) VALUES ('$nama', '$nip', '$noHP', '$email')";
    mysqli_query($db, $tambah);
    return mysqli_affected_rows($db);
}

function hapus($nip) {
    global $db;
    $hapus = "DELETE FROM pegawai WHERE `pegawai`.`nip` = '$nip'";
    mysqli_query($db,$hapus);
    return mysqli_affected_rows($db);
}

function ubah($data) {
    global $db;
    $nip  = $data ["nip"];
    $nama = $data["nama"];
    $nipp = $data["nipp"];
    $nohp = $data["nohp"];
    $email = $data["email"];
    $ubah = "UPDATE pegawai SET nama = '$nama', nip = '$nip', nohp = '$nohp', email = '$email' WHERE `pegawai`.`nip` = '$nipp'";
    mysqli_query($db, $ubah);
    return mysqli_affected_rows($db);
}

?>