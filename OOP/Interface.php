<?php


interface InfoMahasiswa {
    public function getInfoMahasiswa();
}


abstract class Mahasiswa {
    protected  $nama,
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

    abstract public function getInfo();



}


class Aktif extends Mahasiswa implements InfoMahasiswa {
    public function __construct($nama= 'nama',$nim= 'nim',$dosen= 'dosen',$semester= 0,$MKumum= 0)
    {
        parent::__construct($nama,$nim,$dosen,$semester);
        $this->MKumum = $MKumum;
    }

    public function getInfoMahasiswa() {
        $str =  $this->getInfo() . 
                "Status : Aktif <br> 
                Mata Kuliah : $this->MKumum Umum |<hr>";
        return $str;
    }

    public function getInfo() {
        $str = 
        "{$this->getLabel()} <br>
        NIM : $this->nim | <br>
        Semester : $this->semester | <br>";
        return $str;
    }
}





class Terminal extends Mahasiswa implements InfoMahasiswa{
    public function __construct($nama= 'nama',$nim= 'nim',$dosen= 'dosen',$semester= 0,$MKTambahan= 0)
    {
        parent::__construct($nama,$nim,$dosen,$semester);
        $this->MKtambahan = $MKTambahan;
    }

    public function getInfoMahasiswa() {
        $str =  $this->getInfo() .
                "Status : Terminal | <br>
                Mata Kuliah : $this->MKtambahan Tambahan | <hr>";
        return $str;
    }

        public function getInfo() {
        $str = 
        "{$this->getLabel()} <br>
        NIM : $this->nim | <br>
        Semester : $this->semester | <br>";
        return $str;
    }
}




class CetakInfoMahasiswa {
    public $daftarMahasiswa = [];

    public function tambahMahasiswa(Mahasiswa $mahasiswa) {
        $this->daftarMahasiswa[] = $mahasiswa;
    }

    public function cetak() {
        $str = "DAFTAR MAHASISWA : <br> <br>";

        foreach ($this->daftarMahasiswa as $mhs) {
            $str .= $mhs -> getInfoMahasiswa();
        }

        return $str;
    }
    
}



$mahasiswa1 = new Aktif("Muhammad Hafiz Al Fitri", "E020321015","Abdul Rozaq",3,8);
$mahasiswa2 = new Aktif("Pretty Swastika", "E020321024","Evi Lestari",4,5);
$mahasiswa3 = new Terminal("Andre", "E020321030", "Sari Hepi",6,4,0);
$mahasiswa4 = new Terminal("Faisal", "E020321014", "Sa'id Ramadhan",2,2,0);

$CetakMahasiswa = new CetakInfoMahasiswa;

$CetakMahasiswa -> tambahMahasiswa($mahasiswa1);
$CetakMahasiswa -> tambahMahasiswa($mahasiswa2);
$CetakMahasiswa -> tambahMahasiswa($mahasiswa3);
$CetakMahasiswa -> tambahMahasiswa($mahasiswa4);

echo $CetakMahasiswa -> cetak();


