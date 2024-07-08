<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
class Anggota extends Controller {
    public function index() {
        $data['title'] = "Data Anggota";
        $data['anggota'] = $this->model('Anggota_model')->getAllAnggota();
        $this->view('templates/header', $data);
        $this->view('anggota/index', $data);
        $this->view('templates/footer');
    }

    public function detail($nim) {
        $data['title'] = "Detail Anggota";
        $data['anggota'] = $this->model('Anggota_model')->getAnggotaById($nim);
        $this->view('templates/header', $data);
        $this->view('anggota/detail', $data);
        $this->view('templates/footer');
    }

    // Function Tambah Anggota
    public function tambahAnggota() {
        if ($this->model('Anggota_model')->tambahDataAnggota($_POST) > 0) {
            header('Location: ' . baseURL . '/anggota');
            exit;
        }
    }

    // Function Delete Anggota
    public function hapusAnggota($nim) {
        if ($this->model('Anggota_model')->hapusDataAnggota($nim) > 0) {
            header('Location: ' . baseURL . '/anggota');
            exit;
        }
    }

    // Function Edit Anggota
    public function editAnggota($nim) {
        $data['title'] = "Edit Anggota";
        $data['anggota'] = $this->model('Anggota_model')->getAnggotaById($nim);
        $this->view('templates/header', $data);
        $this->view('anggota/edit', $data);
        $this->view('templates/footer');
    }

    // Function Update Anggota
    public function updateAnggota() {
        if ($this->model('Anggota_model')->updateDataAnggota($_POST) > 0) {
            header('Location: ' . baseURL . '/anggota');
            exit;
        }
    }

    //Ini nanti hapus aja
    public function anggota() {
        $this->view('admin/anggota');
    }

    public function buku() {
        $this->view('admin/buku');
    }

    public function dashboard() {
        $this->view('admin/dashboard');
    }

    public function edit_anggota() { 
        $this->view('admin/edit_anggota');
    }

    public function edit_buku() {
        $this->view('admin/edit_buku');
    }

    public function peminjaman() {
        $this->view('admin/peminjaman');
    }

    public function tambah_anggota() {
        $this->view('admin/tambah_anggota');
    }
    public function tambah_buku() {
        $this->view('admin/tambah_buku');
    }
}
