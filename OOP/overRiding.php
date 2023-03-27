<?php


class Mahasiswa {
    public  $nama = 'nama',
            $nim = 'nim',
            $dosen = 'dosen',
            $semester = 0,
            $MKtambahan = 0,
            $MKumum = 0;

    public function __construct($nama,$nim,$dosen,$semester,$MKtambahan,$MKumum)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->dosen = $dosen;
        $this->semester = $semester;
        $this->MKtambahan = $MKtambahan;
        $this->MKumum = $MKumum;
    }

    public function getLabel() {
        return  "Nama : {$this->nama} ({$this->dosen}) |";
    }

    public function getLabelLengkap() {
        $str = 
        "{$this->getLabel()} <br>
        NIM : $this->nim | <br>
        Semester : $this->semester | <br>";
        return $str;
    }
}

class Aktif extends Mahasiswa {
    public function getLabelLengkap() {
        $str = parent::getLabelLengkap() . " Status : Aktif <br> Mata Kuliah : $this->MKumum Umum |<hr>";
        return $str;
    }
}

class Terminal extends Mahasiswa {
    public function getLabelLengkap() {
        $str = parent::getLabelLengkap() ."Status : Terminal | <br>
        Mata Kuliah : $this->MKtambahan Tambahan | <hr>";
        return $str;
    }
}

class Cetak {
    public function cetakMHS($mahasiswa)
    {
        $str = "{$mahasiswa->nama} ($mahasiswa->nim) | Semester {$mahasiswa->semester} | {$mahasiswa->dosen} <hr>";
        return $str;
    }
}



$mahasiswa1 = new Aktif("Muhammad Hafiz Al Fitri", "E020321015","Abdul Rozaq",3,0,8,'Aktif');
$mahasiswa2 = new Aktif("Pretty Swastika", "E020321024","Evi Lestari",4,0,5,'Aktif');
$mahasiswa3 = new Terminal("Andre", "E020321030", "Sari Hepi",6,4,0,'Terminal');
$mahasiswa4 = new Terminal("Faisal", "E020321014", "Sa'id Ramadhan",2,2,0,'Terminal');

echo $mahasiswa1 ->getLabelLengkap();
echo $mahasiswa2 ->getLabelLengkap();
echo $mahasiswa3 ->getLabelLengkap();
echo $mahasiswa4 ->getLabelLengkap();

echo "<br>";
echo "<br>";





