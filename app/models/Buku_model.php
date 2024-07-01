<?php
class Buku_model{
    private $table = 'buku';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBuku()
    {
        $this->db->query('SELECT*FROM '.$this->table);
        return $this->db->resultSet();
    }

    public function getBukuById($id)
    {
        $this->db->query('SELECT*FROM '. $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    // Query insert data
    public function tambahDataBuku($data)
    {
        $query = "INSERT INTO buku (judul, rak, stok, status) VALUES (:judul, :rak, :stok, :status)";
        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('rak', $data['rak']);
        $this->db->bind('stok', $data['stok']);
        $this->db->bind('status', $data['status']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}