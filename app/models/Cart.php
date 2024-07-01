<?php
class Cart {
    private $table = 'cart';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getCartItems($nim)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE nim_anggota = :nim_anggota');
        $this->db->bind(':nim_anggota', $nim);
        return $this->db->resultSet();
    }

    public function addToCart($data)
    {
        $this->db->query('INSERT INTO ' . $this->table . ' (id_buku, nim_anggota) VALUES (:id_buku, :nim_anggota)');
        $this->db->bind(':id_buku', $data['id_buku']);
        $this->db->bind(':nim_anggota', $data['nim_anggota']);
        $this->db->execute();
    }

    public function updateCartItem($id, $data)
    {
        $this->db->query('UPDATE ' . $this->table . ' SET tanggal_pinjam = :tanggal_pinjam, tanggal_kembali = :tanggal_kembali, jumlah_pinjam = :jumlah_pinjam WHERE id = :id');
        $this->db->bind(':id', $id);
        $this->db->bind(':tanggal_pinjam', $data['tanggal_pinjam']);
        $this->db->bind(':tanggal_kembali', $data['tanggal_kembali']);
        $this->db->bind(':jumlah_pinjam', $data['jumlah_pinjam']);
        $this->db->execute();
    }

    public function removeCartItem($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id = :id');
        $this->db->bind(':id', $id);
        $this->db->execute();
    }

    public function clearCart($nim_anggota)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE nim_anggota = :nim_anggota');
        $this->db->bind(':nim_anggota', $nim_anggota);
        $this->db->execute();
    }
}
