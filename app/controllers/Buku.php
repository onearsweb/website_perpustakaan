<?php

class Buku extends Controller {
    public function index() {
        $data['title'] = "Data Buku";
        $data['buku'] = $this->model('Buku_model')->getAllBuku();
        $this->view('templates/header', $data);
        $this->view('buku/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id) {
        $data['title'] = "Data Buku";
        $data['buku'] = $this->model('Buku_model')->getBukuById($id);
        $this->view('templates/header', $data);
        $this->view('buku/detail', $data);
        $this->view('templates/footer');
    }

    // Function Query Insert
    public function tambahBuku() {
        if ($this->model('Buku_model')->tambahDataBuku($_POST) > 0) {
            header('Location: ' . baseURL . '/buku');
            exit;
        }
    }

    // Function Query Delete
    public function hapusBuku($id){
        if ($this->model('Buku_model')->hapusDataBuku($id) > 0) {
            header('Location: ' . baseURL . '/buku');
            exit;
        }
    }
}
