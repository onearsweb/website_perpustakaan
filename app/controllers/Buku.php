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

    // Function Tambah Buku
    public function tambahBuku() {
        if ($this->model('Buku_model')->tambahDataBuku($_POST) > 0) {
            header('Location: ' . baseURL . '/buku');
            exit;
        }
    }

    // function Edit Buku
    public function editBuku($id) {
        $data['title'] = "Edit Data Buku";
        $data['buku'] = $this->model('Buku_model')->getBukuById($id);
        $this->view('templates/header', $data);
        $this->view('buku/edit', $data);
        $this->view('templates/footer');
    }

    // Function Update Buku
    public function updateBuku() {
        if ($this->model('Buku_model')->updateDataBuku($_POST) > 0) {
            header('Location: ' . baseURL . '/buku');
            exit;
        }
    }

    // Function Hapus Buku
    public function hapusBuku($id) {
        if ($this->model('Buku_model')->hapusDataBuku($id) > 0) {
            header('Location: ' . baseURL . '/buku');
            exit;
        }
    }
}
?>
