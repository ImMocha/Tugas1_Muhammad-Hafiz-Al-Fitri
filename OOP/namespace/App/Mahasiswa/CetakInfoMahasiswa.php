<?php 

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