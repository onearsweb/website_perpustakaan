<?php
require_once '../app/models/Pinjam.php';
// Start session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

class PinjamControllers extends Controller {
    private $pinjamModel;

    public function __construct() {
        $this->pinjamModel = new Pinjam();
    }

    public function pinjam() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_buku = isset($_POST['id_buku']) ? $_POST['id_buku'] : null;
            $nim_anggota = isset($_POST['nim_anggota']) ? trim($_POST['nim_anggota']) : null;
            $tgl_pinjam = isset($_POST['tgl_pinjam']) ? $_POST['tgl_pinjam'] : null;
            $tenggat_pengembalian = isset($_POST['tenggat_pengembalian']) ? $_POST['tenggat_pengembalian'] : null;
            $jumlah_pinjam = isset($_POST['jumlah_pinjam']) ? $_POST['jumlah_pinjam'] : null;

            if ($id_buku && $nim_anggota && $tgl_pinjam && $tenggat_pengembalian && $jumlah_pinjam) {
                $result = $this->pinjamModel->pinjamBuku($id_buku, $nim_anggota, $tgl_pinjam, $tenggat_pengembalian, $jumlah_pinjam);
                if ($result) {
                    header("Location: " . baseURL . "/anggotacontrollers/pengembalian");
                    exit();
                } else {
                    echo "Gagal melakukan peminjaman atau mengurangi stok buku.";
                }
            } else {
                echo "Ada parameter yang kosong. Gagal melakukan peminjaman.";
            }
        } else {
            // Handle jika bukan POST request (optional)
        }
    }
}


