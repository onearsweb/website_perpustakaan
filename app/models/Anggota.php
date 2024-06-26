<?php
class Anggota{
    private $table = 'anggota';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllAnggota()
    {
        $this->db->query('SELECT*FROM '.$this->table);
        return $this->db->resultSet();
    }

    public function authenticate($username, $password) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE nim = :username AND nim = :password');
        $this->db->bind(':username', $username);
        $this->db->bind(':password', $password);
        $row = $this->db->single();

        return $row ;
    }

    public function getNamaAnggotaByNim($nim) {
        $query = "SELECT nama FROM anggota WHERE nim = :nim";
        $this->db->query($query);
        $this->db->bind(':nim', $nim);
        $result = $this->db->single();

        if (!$result) {
            return null; 
        }

        return $result['nama'];
    }
}