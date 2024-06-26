<?php
class Pengembalian {
    private $table = 'pinjam';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllPinjam($nim) {
        $this->db->query('
            SELECT p.*, b.judul, b.author, a.nama
            FROM ' . $this->table . ' p
            JOIN buku b ON p.id_buku = b.id
            JOIN anggota a ON p.nim_anggota = a.nim
            WHERE p.nim_anggota = :nim
            ORDER BY 
                CASE 
                    WHEN p.status = "Dipinjam" THEN 0  -- Status dipinjam diletakkan di atas
                    ELSE 1
                END,
                p.tgl_pinjam DESC  -- Urutan tanggal pinjam terbaru ke terlama
        ');
        $this->db->bind(':nim', $nim);
        return $this->db->resultSet();
    }

    public function kembalikanBuku($id_pinjam, $tgl_kembali) {
        $this->db->beginTransaction();

        try {
            $query = "UPDATE pinjam SET tgl_kembali = ?, status = CASE
                          WHEN ? > tenggat_pengembalian THEN 'Telat'
                          ELSE 'Dikembalikan'
                      END
                      WHERE id = ?";
            $this->db->query($query); 
            $this->db->bind(1, $tgl_kembali); 
            $this->db->bind(2, $tgl_kembali); 
            $this->db->bind(3, $id_pinjam); 
            $this->db->execute();

            $query = "SELECT id_buku, jumlah_pinjam FROM pinjam WHERE id = ?";
            $this->db->query($query); 
            $this->db->bind(1, $id_pinjam); 
            $result = $this->db->single(); 

            if (!$result) {
                throw new Exception("ID pinjam tidak ditemukan.");
            }

            $id_buku = $result['id_buku'];
            $jumlah_pinjam = $result['jumlah_pinjam'];

            $query = "UPDATE buku SET stok = stok + ? WHERE id = ?";
            $this->db->query($query); 
            $this->db->bind(1, $jumlah_pinjam); 
            $this->db->bind(2, $id_buku); 
            $this->db->execute();

            $this->db->commit();
            return "Pengembalian buku berhasil.";

        } catch (Exception $e) {
           $this->db->rollback(); 
            $errorMessage = $e->getMessage();
            if (!is_string($errorMessage)) {
                $errorMessage = "Exception occurred"; 
            }
            return "Gagal melakukan pengembalian buku: " . $errorMessage;
        }
    }
}
