<?php
require_once '../app/models/Buku.php';
require_once '../app/models/Pengembalian.php';
require_once '../app/models/Pinjam.php';
require_once '../app/models/Anggota.php';
require_once '../app/models/Cart.php';
// Start session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

class CartControllers extends Controller
{
    private $cartModel;
    private $pinjamModel;
    public function __construct()
    {
        $this->cartModel = new Cart();
        $this->pinjamModel = new Pinjam();
    }

    public function index()
    {
        $nim = $_SESSION['user_nim'];
        $anggotaModel = new Anggota();
        $bukuModel = new Buku();

        $cartItems = $this->cartModel->getCartItems($nim);

        $data['cart'] = [];
        foreach ($cartItems as $item) {
            $book = $bukuModel->getBuku($item['id_buku']);
            $item['buku'] = $book;
            $data['cart'][] = $item;
        }

        $data['nama'] = $anggotaModel->getNamaAnggotaByNim($nim);
        $this->view('anggotamain/cart', $data);
    }


    public function addToCart($id)
    {
        $data = [
            'nim_anggota' => $_SESSION['user_nim'],
            'id_buku' =>$id,
        ];
        $this->cartModel->addToCart($data);
    }


    public function prosesPeminjaman() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_buku = $_POST['id_buku'];
            $id = $_POST['id']; 
            $tgl_pinjam = array();
            $tenggat_pengembalian = array();
            $jumlah_pinjam = array();
        
            foreach ($id as $index => $id_cart) {
                $id_book = isset($id_buku[$index]) ? $id_buku[$index] : null;
                $nim_anggota = isset($_SESSION['user_nim']) ? trim($_SESSION['user_nim']) : null;
                $tgl_pinjam = isset($_POST['tgl_pinjam' . $id_cart]) ? $_POST['tgl_pinjam' . $id_cart] : null;
                $tenggat_pengembalian = isset($_POST['tenggat_pengembalian' . $id_cart]) ? $_POST['tenggat_pengembalian' . $id_cart] : null;
                $jumlah_pinjam = isset($_POST['jumlah_pinjam' . $id_cart]) ? $_POST['jumlah_pinjam' . $id_cart] : null;
            
                if ($id_book && $nim_anggota && $tgl_pinjam && $tenggat_pengembalian && $jumlah_pinjam) {
                    $result = $this->pinjamModel->pinjamBuku($id_book, $nim_anggota, $tgl_pinjam, $tenggat_pengembalian, $jumlah_pinjam);
                    if ($result) {
                        $this->removeCartItem($id_cart);
                    } else {
                        header("Location: " . baseURL . "/cartcontrollers/index");
                    }
                } else {
                    header("Location: " . baseURL . "/cartcontrollers/index");
                }
            }
        }
    }

    public function removeCartItem($id)
    {
        $this->cartModel->removeCartItem($id);
        header('Location: ' . baseURL . '/anggotacontrollers/pengembalian');
    }
}
