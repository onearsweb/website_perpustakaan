<?php

class Anggota_model{
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
}