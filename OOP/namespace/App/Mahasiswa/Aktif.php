<?php 


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