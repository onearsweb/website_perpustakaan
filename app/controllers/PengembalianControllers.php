<?php
require_once '../app/models/Pengembalian.php';
// Start session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

class PengembalianControllers extends Controller {
    private $pengembalianModel;

    public function __construct() {
        $this->pengembalianModel = new Pengembalian();
    }

    public function postPengembalian() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_pinjam = isset($_POST['id_pinjam']) ? $_POST['id_pinjam'] : null;
            $tgl_kembali = date('Y-m-d');

            // echo $id_pinjam;
            // echo $tgl_kembali;

            if ($id_pinjam) {
                $result = $this->pengembalianModel->kembalikanBuku($id_pinjam, $tgl_kembali);
                if ($result === "Pengembalian buku berhasil.") {
                    header("Location: " . baseURL . "/anggotacontrollers/pengembalian");
                    exit();
                } else {
                    echo $result;
                }
            } else {
                echo "ID pinjam tidak valid.";
            }
        }
    }
}


