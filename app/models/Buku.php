<?php
class Buku {
    private $table = 'buku';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBuku() {
        $this->db->query('SELECT*FROM '.$this->table);
        return $this->db->resultSet();
    }

    public function getBuku($id)
    {
        $this->db->query('SELECT*FROM '. $this->table . ' WHERE id = :id');
        $this->db->bind(':id', $id);
        return $this->db->resultSet();
    }

    public function getRak($rak)
    {
        $this->db->query('SELECT*FROM '. $this->table . ' WHERE rak = :rak');
        $this->db->bind(':rak', $rak);
        return $this->db->resultSet();
    }
}


