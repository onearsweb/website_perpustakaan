<?php
class Anggota extends Controller{
    public function index(){
        $data['title'] = "Data Anggota";
        $data['anggota'] = $this->model('Anggota_model')->getAllAnggota();
        $this->view('templates/header', $data);
        $this->view('anggota/index', $data);
        $this->view('templates/footer');
    }

    public function detail($nim) {
        $data['title'] = "Data Anggota";
        $data['anggota'] = $this->model('Anggota_model')->getAnggotaById($nim);
        $this->view('templates/header', $data);
        $this->view('anggota/detail', $data);
        $this->view('templates/footer');
    }

    public function tambahAnggota() {
        if ($this->model('Anggota_model')->tambahDataAnggota($_POST) > 0) {
            header('Location: ' . baseURL . '/anggota');
            exit;
        }
    }
}