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
        $data['title'] = "Detail Buku";
        $data['buku'] = $this->model('Buku_model')->getBukuById($id);
        $this->view('templates/header', $data);
        $this->view('buku/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah(){
        $data['title'] = "Tambahin Buku";
        $this->view('templates/header', $data);
        $this->view('buku/tambah', $data);
        $this->view('templates/footer');
    }

    public function tambahBuku() {
        if ($this->model('Buku_model')->tambahDataBuku($_POST) > 0) {
            header('Location: ' . baseURL . '/buku');
            exit;
        }
    }

    public function edit($id) {
        $data['title'] = "Edit Data Buku";
        $data['buku'] = $this->model('Buku_model')->getBukuById($id);
        $this->view('templates/header', $data);
        $this->view('buku/edit', $data);
        $this->view('templates/footer');
    }

    public function updateBuku() {
        if ($this->model('Buku_model')->updateDataBuku($_POST) > 0) {
            header('Location: ' . baseURL . '/buku');
            exit;
        }
    }

    public function hapusBuku($id) {
        if ($this->model('Buku_model')->hapusDataBuku($id) > 0) {
            header('Location: ' . baseURL . '/buku');
            exit;
        }
    }
}
?>
