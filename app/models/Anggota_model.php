<?php

class Anggota_model {
    private $table = 'anggota';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllAnggota() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getAnggotaById($nim) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE nim=:nim');
        $this->db->bind('nim', $nim);
        return $this->db->single();
    }

    // Query Insert Anggota
    public function tambahDataAnggota($data) {
        $query = "INSERT INTO anggota (nim, nama, jk, alamat, no_tlp) VALUES (:nim, :nama, :jk, :alamat, :no_tlp)";
        $this->db->query($query);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jk', $data['jk']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('no_tlp', $data['no_tlp']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    // Query Delete Anggota
    public function hapusDataAnggota($nim) {
        $query = "DELETE FROM anggota WHERE nim = :nim";
        $this->db->query($query);
        $this->db->bind('nim', $nim);
        $this->db->execute();
        return $this->db->rowCount();
    }

    // Query Edit and Delete Anggota
    public function updateDataAnggota($data) {
        $query = "UPDATE anggota SET nama = :nama, jk = :jk, alamat = :alamat, no_tlp = :no_tlp WHERE nim = :nim";
        $this->db->query($query);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jk', $data['jk']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('no_tlp', $data['no_tlp']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}