<?php
require_once '../app/models/Buku.php';
require_once '../app/models/Pengembalian.php';
require_once '../app/models/Anggota.php';
// Start session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

class AnggotaControllers extends Controller {
    public function index() {
        $nim = $_SESSION['user_nim'];

        $bukuModel = new Buku();
        $anggotaModel = new Anggota();

        $data['buku'] = $bukuModel->getAllBuku();
        $data['nama'] = $anggotaModel->getNamaAnggotaByNim($nim);
        $this->view('anggotamain/daftar_buku', $data);
    }

    public function pengembalian() {
        $nim = $_SESSION['user_nim'];

        $pengembalianModel = new Pengembalian();
        $anggotaModel = new Anggota();

        $data['pinjam'] = $pengembalianModel->getAllPinjam($nim);
        $data['nama'] = $anggotaModel->getNamaAnggotaByNim($nim);
        $this->view('anggotamain/pengembalian', $data);
    }
}