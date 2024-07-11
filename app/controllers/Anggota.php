<?php
class Anggota extends Controller {
    public function index() {
        $data['title'] = "Data Anggota";
        $data['anggota'] = $this->model('Anggota_model')->getAllAnggota();
        $this->view('templates/header', $data);
        $this->view('anggota/index', $data);
        $this->view('templates/footer');
    }

    public function tambah() {
        $data['title'] = "Tambahin Anggota";
        $this->view('templates/header', $data);
        $this->view('anggota/tambah', $data);
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
    public function edit($nim) {
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
}
