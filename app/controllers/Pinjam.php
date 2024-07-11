<?php
class Pinjam extends Controller {
    public function index() {
        $data['title'] = "Data Peminjaman";
        $data['peminjaman'] = $this->model('Pinjam_model')->getAllPeminjaman();
        $this->view('templates/header', $data);
        $this->view('pinjam/index', $data);
        $this->view('templates/footer');
    }

    public function tambah() {
        $data['title'] = "Tambah Peminjaman";
        $this->view('templates/header', $data);
        $this->view('pinjam/tambah', $data);
        $this->view('templates/footer');
    }

    public function tambahPeminjaman() {
        if ($this->model('Pinjam_model')->tambahDataPeminjaman($_POST) > 0) {
            header('Location: ' . baseURL . '/pinjam');
            exit;
        }
    }

    public function hapus($id) {
        if ($this->model('Pinjam_model')->hapusDataPeminjaman($id) > 0) {
            header('Location: ' . baseURL . '/pinjam');
            exit;
        }
    }

    public function edit($id) {
        $data['title'] = "Edit Peminjaman";
        $data['peminjaman'] = $this->model('Pinjam_model')->getPeminjamanById($id);
        $this->view('templates/header', $data);
        $this->view('pinjam/edit', $data);
        $this->view('templates/footer');
    }

    public function updatePeminjaman() {
        if ($this->model('Pinjam_model')->updateDataPeminjaman($_POST) > 0) {
            header('Location: ' . baseURL . '/pinjam');
            exit;
        }
    }
}
