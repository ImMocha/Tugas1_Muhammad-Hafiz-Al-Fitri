<?php 

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