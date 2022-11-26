<?php

class Siswa_model{
    private $table = 'siswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
        public function getAllSiswa()
        {
         $this->db->query("SELECT * FROM .$this->table");
         return $this->db->reseultSet();        
        }
    public function getSiswaById($id)
    {
        $this->db->query('SELECT * FROM '. $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function tambahDataSiswa($data)
    {
        $query = "INSERT INTO siswa
                    VALUES ('',:nama,:kelas,:jurusan)";
                
        $this->db->query($query);
        $this->db->bind(':nama', $data['nama']);
        $this->db->bind(':kelas', $data['kelas']);
        $this->db->bind(':jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function hapusDataSiswa($id)
    {
        $query = "DELETE FROM siswa WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id',$id );

        $this->db->execute();

        return $this->db->rowCount();

        
    }
    public function UbahDataSiswa($data)
    {
        $query = "UPDATE siswa SET 
                    nama=:nama,
                    kelas=:kelas,
                    jurusan=:jurusan 
                    WHERE id=:id";
                
        $this->db->query($query);
        $this->db->bind(':nama', $data['nama']);
        $this->db->bind(':kelas', $data['kelas']);
        $this->db->bind(':jurusan', $data['jurusan']);
        $this->db->bind(':id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}