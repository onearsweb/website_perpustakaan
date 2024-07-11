<?php

class Home extends Controller
{
    public function index()
    {
        $data['title'] = "Dashboard";

        $buku = $this->model('Buku')->getAllBuku();
        $pinjam = $this->model('Pinjam_model')->getAllPeminjaman();
        $anggota = $this->model('Anggota_model')->getAllAnggota();

        $totalStok = 0;
        foreach ($buku as $b) {
            $totalStok += $b['stok'];
        }

        $totalPinjam = 0;
        foreach ($pinjam as $p) {
            if ($p['status'] === 'Dipinjam') {
                $totalPinjam += $p['jumlah_pinjam'];
            }
        }

        $totalAnggota = count($anggota);

        $data['bukuPinjam'] = $totalPinjam;
        $data['sisaBuku'] = $totalStok;
        $data['totalBuku'] = $totalStok + $totalPinjam;
        $data['totalAnggota'] = $totalAnggota;

        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
