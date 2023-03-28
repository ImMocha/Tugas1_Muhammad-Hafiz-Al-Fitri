<?php 



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