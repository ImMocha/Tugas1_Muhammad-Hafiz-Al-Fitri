<?php 

class Mahasiswa {
    public  $nama = 'nama',
            $nim = 'nim',
            $dosen = 'dosen',
            $semester = 0;

    public function __construct($nama,$nim,$dosen,$semester)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->dosen = $dosen;
        $this->semester = $semester;

    }

    public function ubah() {
        return  "Nama : {$this->nama} ({$this->dosen}) <hr>";
    }
}





$mahasiswa1 = new Mahasiswa("Muhammad Hafiz Al Fitri", "3A","Abdul Rozaq",3);
$mahasiswa2 = new Mahasiswa("Pretty Swastika", "4A","Evi Lestari",4);

echo $mahasiswa1 = $mahasiswa1 ->ubah();
echo $mahasiswa2 = $mahasiswa2 ->ubah();

