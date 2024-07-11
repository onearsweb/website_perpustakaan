<?php

class Pinjam_model {
    private $table = 'pinjam';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllPeminjaman() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getPeminjamanById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataPeminjaman($data) {
        $query = "INSERT INTO pinjam (id_buku, nim_anggota, tgl_pinjam, tenggat_pengembalian, tgl_kembali, status, jumlah_pinjam) 
                  VALUES (:id_buku, :nim_anggota, :tgl_pinjam, :tenggat_pengembalian, :tgl_kembali, :status, :jumlah_pinjam)";
        $this->db->query($query);
        $this->db->bind('id_buku', $data['id_buku']);
        $this->db->bind('nim_anggota', $data['nim_anggota']);
        $this->db->bind('tgl_pinjam', $data['tgl_pinjam']);
        $this->db->bind('tenggat_pengembalian', $data['tenggat_pengembalian']);
        $this->db->bind('tgl_kembali', $data['tgl_kembali']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('jumlah_pinjam', $data['jumlah_pinjam']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataPeminjaman($id) {
        $query = "DELETE FROM pinjam WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateDataPeminjaman($data) {
        $query = "UPDATE pinjam SET id_buku = :id_buku, nim_anggota = :nim_anggota, tgl_pinjam = :tgl_pinjam, tenggat_pengembalian = :tenggat_pengembalian, 
                  tgl_kembali = :tgl_kembali, status = :status, jumlah_pinjam = :jumlah_pinjam WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('id_buku', $data['id_buku']);
        $this->db->bind('nim_anggota', $data['nim_anggota']);
        $this->db->bind('tgl_pinjam', $data['tgl_pinjam']);
        $this->db->bind('tenggat_pengembalian', $data['tenggat_pengembalian']);
        $this->db->bind('tgl_kembali', $data['tgl_kembali']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('jumlah_pinjam', $data['jumlah_pinjam']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
?>