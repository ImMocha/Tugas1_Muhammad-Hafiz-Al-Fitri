<?php 

class Mahasiswa {
    public  $nama = 'nama',
            $kelas = 'kelas',
            $dosen = 'dosen',
            $semester = 0;

    public function ubah() {
        return  "Nama :".$this->nama. 
                        "<br>". 
                "Dosen :".$this->dosen;
    }
}


$mahasiswa1 = new Mahasiswa();
$mahasiswa1->nama = 'Muhammad Hafiz Al-Fitri';
$mahasiswa1->kelas = '3A';
$mahasiswa1->dosen = 'Evi Lestari';
$mahasiswa1->semester = 3;



echo $mahasiswa1->ubah();
