<?php
class Pinjam {
    private $table = 'pinjam';
    private $db;

    public function __construct() {
        $this->db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if ($this->db->connect_error) {
            die("Connection failed: " . $this->db->connect_error);
        }
    }

    public function pinjamBuku($id_buku, $nim_anggota, $tgl_pinjam, $tenggat_pengembalian, $jumlah_pinjam) {
        $query = "INSERT INTO $this->table (id_buku, nim_anggota, tgl_pinjam, tenggat_pengembalian, jumlah_pinjam, status)
                  VALUES (?, ?, ?, ?, ?, 'Dipinjam')";
        
        $stmt = $this->db->prepare($query);

        if ($stmt) {
            $stmt->bind_param("iisss", $id_buku, $nim_anggota, $tgl_pinjam, $tenggat_pengembalian, $jumlah_pinjam);

            if ($stmt->execute()) {
                $update_query = "UPDATE buku SET stok = stok - ? WHERE id = ?";
                $update_stmt = $this->db->prepare($update_query);
                
                if ($update_stmt) {
                    $update_stmt->bind_param("ii", $jumlah_pinjam, $id_buku);
                    
                    if ($update_stmt->execute()) {
                        return true; // Peminjaman berhasil
                    } else {
                        return false; // Gagal mengurangi stok buku
                    }
                } else {
                    return false; // Gagal mempersiapkan statement update
                }
            } else {
                return false; // Gagal melakukan peminjaman
            }
        } else {
            return false; // Gagal mempersiapkan statement insert
        }
    }
}
