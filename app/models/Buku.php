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
}


