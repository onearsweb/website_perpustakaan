<?php
require_once '../app/models/Buku.php';
require_once '../app/models/Pengembalian.php';
require_once '../app/models/Anggota.php';
require_once '../app/models/Cart.php';
// Start session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

class CartControllers extends Controller
{
    private $cartModel;
    // private $bookModel;
    public function __construct()
    {
        $this->cartModel = new Cart();
        // $this->bookModel = new Buku(); 
    }

    public function index()
    {
        $nim = $_SESSION['user_nim'];
        $anggotaModel = new Anggota();
        $bukuModel = new Buku();

        $cartItems = $this->cartModel->getCartItems($nim);

        // Initialize an empty array to hold all cart items
        $data['cart'] = [];

        // Fetch the details of each book in the cart
        foreach ($cartItems as $item) {
            $book = $bukuModel->getBuku($item['id_buku']);
            
            // Append the book details to the cart item
            $item['buku'] = $book;

            // Push the updated item to the cart array
            $data['cart'][] = $item;
        }

        $data['nama'] = $anggotaModel->getNamaAnggotaByNim($nim);
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';

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

    public function updateCartItem($id)
    {
        $data = [
            'tanggal_pinjam' => $_POST['tanggal_pinjam'],
            'tanggal_kembali' => $_POST['tanggal_kembali'],
            'jumlah_pinjam' => $_POST['jumlah_pinjam']
        ];

        $this->cartModel->updateCartItem($id, $data);
        header('Location: ' . baseURL . '/CartController');
    }

    public function removeCartItem($id)
    {
        $this->cartModel->removeCartItem($id);
        header('Location: ' . baseURL . '/CartController');
    }

    public function checkout()
    {
        $user_nim = $_SESSION['user_nim'];
        $cart_items = $this->cartModel->getCartItems($user_nim);

        foreach ($cart_items as $item) {
            // Process the checkout (e.g., create a new loan entry)
            // Your checkout logic here...
        }

        // Clear the cart after checkout
        $this->cartModel->clearCart($user_nim);

        header('Location: ' . baseURL . '/CartController');
    }
}
