<?php


class Mahasiswa {
    public  $nama = 'nama',
            $dosen ='dosen',
            $semester = 0;
    private $nim ='nim';

    protected $kompensasi = 0;

    public function __construct($nama,$nim,$dosen,$semester)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->dosen = $dosen;
        $this->semester = $semester;
    }

    public function getLabel() {
        return  "Nama : {$this->nama} ({$this->dosen}) |";
    }

    public function getLabelMahasiswa() {
        $str = 
        "{$this->getLabel()} <br>
        NIM : $this->nim | <br>
        Semester : $this->semester | <br>";
        return $str;
    }
    
    public function getNim() {
        return $this->nim;
    }


}




class Aktif extends Mahasiswa {
    public function __construct($nama,$nim,$dosen,$semester,$MKumum)
    {
        parent::__construct($nama,$nim,$dosen,$semester);
        $this->MKumum = $MKumum;
    }

    public function getLabelMahasiswa() {
        $str =  parent::getLabelMahasiswa() . 
                "Status : Aktif <br> 
                Mata Kuliah : $this->MKumum Umum |<hr>";
        return $str;
    }
}


class Terminal extends Mahasiswa {
    public function __construct($nama,$nim,$dosen,$semester, $MKTambahan)
    {
        parent::__construct($nama,$nim,$dosen,$semester);
        $this->MKtambahan = $MKTambahan;
    }

    public function getLabelMahasiswa() {
        $str =  parent::getLabelMahasiswa() .
                "Status : Terminal | <br>
                Mata Kuliah : $this->MKtambahan Tambahan | <hr>";
        return $str;
    }

    public function setKompensasi ($kompensasi) {
        $this->kompensasi = $kompensasi;
    }

    public function GetKompensasi() {
        return $this->MKtambahan + $this->kompensasi . ' Tambahan';
        
    }
}






class Cetak {
    public function cetakMHS($mahasiswa)
    {
        $str = "{$mahasiswa->nama} ($mahasiswa->nim) | Semester {$mahasiswa->semester} | {$mahasiswa->dosen} <hr>";
        return $str;
    }
}



$mahasiswa1 = new Aktif("Muhammad Hafiz Al Fitri", "E020321015","Abdul Rozaq",3,8);
$mahasiswa2 = new Aktif("Pretty Swastika", "E020321024","Evi Lestari",4,5);
$mahasiswa3 = new Terminal("Andre", "E020321030", "Sari Hepi",6,4,0);
$mahasiswa4 = new Terminal("Faisal", "E020321014", "Sa'id Ramadhan",2,2,0);

echo $mahasiswa1 ->getLabelMahasiswa();
echo $mahasiswa2 ->getLabelMahasiswa();
echo $mahasiswa3 ->getLabelMahasiswa();
echo $mahasiswa4 ->getLabelMahasiswa();

echo "<br>";
echo "<br>";

// $mahasiswa1 -> nim ='E020200202';  ***Tidak Bisa Diubah Karena Var nim Bersifar private
echo $mahasiswa1 -> getNim();

echo "<br>";
echo "<br>";

$mahasiswa3 ->setKompensasi(2);
echo $mahasiswa3 -> GetKompensasi();







