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
        $this->db->query('SELECT * FROM '.$this->table);
        return $this->db->resultSet();
    }

    public function getBukuById($id)
    {
        $this->db->query('SELECT * FROM '. $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    // Method Insert Data Buku
    public function tambahDataBuku($data)
    {
        $query = "INSERT INTO buku (judul, author, kategori, deskripsi, gambar, rak, stok, status) 
                  VALUES (:judul, :author, :kategori, :deskripsi, :gambar, :rak, :stok, :status)";
        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('author', $data['author']);
        $this->db->bind('kategori', $data['kategori']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('gambar', $data['gambar']);
        $this->db->bind('rak', $data['rak']);
        $this->db->bind('stok', $data['stok']);
        $this->db->bind('status', $data['status']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    // Method Update Data Buku
    public function updateDataBuku($data)
    {
        $query = "UPDATE buku SET judul = :judul, author = :author, kategori = :kategori, deskripsi = :deskripsi, 
                  gambar = :gambar, rak = :rak, stok = :stok, status = :status WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('author', $data['author']);
        $this->db->bind('kategori', $data['kategori']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('gambar', $data['gambar']);
        $this->db->bind('rak', $data['rak']);
        $this->db->bind('stok', $data['stok']);
        $this->db->bind('status', $data['status']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    // Method Hapus Data Buku
    public function hapusDataBuku($id){
        $query = "DELETE FROM buku WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
?>