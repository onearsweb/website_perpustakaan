<?php
class Peminjam {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function pinjamBuku($id_buku, $id_admin, $nim_anggota, $tgl_pinjam, $tenggat_pengembalian, $jumlah_pinjam) {
        try {
            $query = "INSERT INTO pinjam (id_buku, id_admin, nim_anggota, tgl_pinjam, tenggat_pengembalian, jumlah_pinjam, status)
                      VALUES (?, ?, ?, ?, ?, ?, 'Dipinjam')";
            
            $stmt = $this->conn->prepare($query);
            $stmt->bind_param("iisssi", $id_buku, $id_admin, $nim_anggota, $tgl_pinjam, $tenggat_pengembalian, $jumlah_pinjam);
        
            if ($stmt->execute()) {
                $update_query = "UPDATE buku SET stok = stok - ? WHERE id = ?";
                $update_stmt = $this->conn->prepare($update_query);
                $update_stmt->bind_param("ii", $jumlah_pinjam, $id_buku);
                
                if ($update_stmt->execute()) {
                    return "Peminjaman berhasil";
                } else {
                    throw new Exception("Gagal mengurangi stok buku");
                }
            } else {
                throw new Exception("Gagal melakukan peminjaman");
            }
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}
