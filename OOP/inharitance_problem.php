<?php 

class Mahasiswa {
    public  $nama = 'nama',
            $nim = 'nim',
            $dosen = 'dosen',
            $semester = 0,
            $MKtambahan,
            $MKumum,
            $status;


    public function __construct($nama,$nim,$dosen,$semester,$MKtambahan,$MKumum,$status)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->dosen = $dosen;
        $this->semester = $semester;
        $this->MKtambahan = $MKtambahan;
        $this->MKumum = $MKumum;
        $this->status = $status;
    }

    public function getLabel() {
        return  "Nama : {$this->nama} ({$this->dosen}) |";
    }

    public function getLabelLengkap() {
        $str = 
        "{$this->getLabel()} <br>
        NIM : $this->nim | <br>
        Semester : $this->semester | <br>
        Status : $this->status <br>";

        if($this->status == "Aktif") {
            $str .= "Mata Kuliah : $this->MKumum Umum <hr>";
        } else if($this->status == "Terminal"){
            $str .= "Mata Kuliah : $this->MKtambahan Tambahan <hr>";
        }
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



$mahasiswa1 = new Mahasiswa("Muhammad Hafiz Al Fitri", "E020321015","Abdul Rozaq",3,0,8,'Aktif');
$mahasiswa2 = new Mahasiswa("Pretty Swastika", "E020321024","Evi Lestari",4,0,5,'Aktif');
$mahasiswa3 = new Mahasiswa("Andre", "E020321030", "Sari Hepi",6,4,0,'Terminal');

echo $mahasiswa1 ->getLabelLengkap();
echo $mahasiswa2 ->getLabelLengkap();
echo $mahasiswa3 ->getLabelLengkap();

echo "<br>";
echo "<br>";

// Masalah : Terlalu banyak tipe dan perilaku Sehingga dibutuhkan Inharitence




