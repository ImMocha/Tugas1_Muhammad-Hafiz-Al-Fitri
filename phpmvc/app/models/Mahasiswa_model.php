<?php 

class Mahasiswa_model{
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMahasiswa() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id_mhs) {
        $this->db->query("SELECT * FROM $this->table WHERE id_mhs =:id_mhs");
        $this->db->bind('id_mhs',$id_mhs);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data)
    {
        $query = "INSERT INTO mahasiswa VALUES (:nim,'',:nama,:jurusan,:alamat)";

        $this->db->query($query);
        $this->db->bind('nama',$data['nama']);
        $this->db->bind('nim',$data['nim']);
        $this->db->bind('jurusan',$data['jurusan']);
        $this->db->bind('alamat',$data['alamat']);

        $this->db->execute();

        return $this->db->rowCount();

    }

    public function hapusDataMahasiswa($id_mhs)
    {
        $query = "DELETE FROM mahasiswa WHERE id_mhs = :id_mhs";
        $this->db->query($query);
        $this->db->bind('id_mhs',$id_mhs);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahDataMahasiswa($data)
    {
        $query =    "UPDATE `mahasiswa` SET 
                    `nim` = :nim, 
                    `nama` = :nama, 
                    `jurusan` = :jurusan, 
                    `alamat` = :alamat 
                    WHERE `mahasiswa`.`id_mhs` = :id_mhs";

        $this->db->query($query);
        $this->db->bind('nama',$data['nama']);
        $this->db->bind('nim',$data['nim']);
        $this->db->bind('jurusan',$data['jurusan']);
        $this->db->bind('alamat',$data['alamat']);
        $this->db->bind('id_mhs',$data['id_mhs']);

        $this->db->execute();

        return $this->db->rowCount();

    }


}