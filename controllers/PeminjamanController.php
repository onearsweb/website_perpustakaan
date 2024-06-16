<?php
require_once 'models/Buku.php';
require_once 'models/Peminjam.php';
require_once 'database/connection.php';

class PeminjamanController {
    private $conn;

    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }

    public function index() {
        $buku = new Buku($this->conn);
        $bukuList = $buku->getAllBooks();
        include 'views/coba.php';
    }

    public function pinjamForm() {
        include 'views/pinjam_form.php';
    }

    public function pinjam() {
        try {
            $id_buku = $_POST['id_buku'];
            $id_admin = $_POST['id_admin'];
            $nim_anggota = $_POST['nim_anggota'];
            $tgl_pinjam = $_POST['tgl_pinjam'];
            $tenggat_pengembalian = $_POST['tenggat_pengembalian'];
            $jumlah_pinjam = $_POST['jumlah_pinjam'];

            $peminjam = new Peminjam($this->conn);
            $result = $peminjam->pinjamBuku($id_buku, $id_admin, $nim_anggota, $tgl_pinjam, $tenggat_pengembalian, $jumlah_pinjam);
            echo $result;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
