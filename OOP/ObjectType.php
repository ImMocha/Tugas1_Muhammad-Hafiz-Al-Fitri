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


class Cetak {
    public function cetakMHS($mahasiswa)
    {
        $str = "{$mahasiswa->nama} ($mahasiswa->nim) | Semester {$mahasiswa->semester} | {$mahasiswa->dosen} <hr>";
        return $str;
    }
}



$mahasiswa1 = new Mahasiswa("Muhammad Hafiz Al Fitri", "E020321015","Abdul Rozaq",3);
$mahasiswa2 = new Mahasiswa("Pretty Swastika", "E020321024","Evi Lestari",4);
$mahasiswa3 = new Mahasiswa("Andre", "E020321030", "Sari Hepi", 4);

echo "mahasiswa 1 : " . $mahasiswa1 ->ubah();
echo "mahasiswa 2 : " . $mahasiswa2 ->ubah();
echo "mahasiswa 3 : " . $mahasiswa3 ->ubah();

echo "<br>";
echo "<br>";

$CetakMahasiswa = new Cetak();
echo $CetakMahasiswa ->cetakMHS($mahasiswa1);
echo $CetakMahasiswa ->cetakMHS($mahasiswa2);
echo $CetakMahasiswa ->cetakMHS($mahasiswa3);



