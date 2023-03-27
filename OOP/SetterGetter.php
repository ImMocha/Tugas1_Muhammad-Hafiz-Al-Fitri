<?php


class Mahasiswa {
    private  $nama,
            $dosen,
            $semester, 
            $nim,
            $kompensasi = 0;

    
    public function setNim($nim) {
        $this->nim = $nim;
    }

    public function getNim() {
        return $this->nim;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }

    public function setDosen($dosen) {
        $this->dosen = $dosen;
    }

    public function getDosen() {
        return $this->dosen;
    }

    public function setSemester($semester) {
        $this->semester = $semester;
    }

    public function getSemester() {
        return $this->semester;
    }

    public function setKompensasi ($kompensasi) {
        $this->kompensasi = $kompensasi;
    }

    public function GetKompensasi() {
        return $this->MKtambahan + $this->kompensasi . ' Tambahan';
        
    }


    public function __construct($nama= 'nama',$nim= 'nim',$dosen= 'dosen',$semester= 0)
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
}




class Aktif extends Mahasiswa {
    public function __construct($nama= 'nama',$nim= 'nim',$dosen= 'dosen',$semester= 0,$MKumum= 0)
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
    public function __construct($nama= 'nama',$nim= 'nim',$dosen= 'dosen',$semester= 0,$MKTambahan= 0)
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

$mahasiswa3 ->setKompensasi(5);
echo $mahasiswa3 -> GetKompensasi();

echo "<br>";
echo "<br>";

// $mahasiswa5 = new Mahasiswa();  
// echo $mahasiswa5 ->nama;    **Akan Error Karena Data Masuk Dari Luar Class (karena Private)

$mahasiswa1 -> nama = 'hafiz'; //Data Tidak Akan Berubah (karena Private)
echo $mahasiswa1-> getNama();

echo "<br>";
echo "<br>";

$mahasiswa1 -> setNama('hafiz');
echo $mahasiswa1 -> getNama();

