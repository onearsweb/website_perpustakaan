<?php
session_start();
class LoginControllers extends Controller {
    public function index() {
        $this->view('login');
    }

    public function authenticate() {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $adminModel = $this->model('Admin');
        $admin = $adminModel->authenticate($username, $password);

        if ($admin) {
            $_SESSION['user_id'] = $admin['id'];
            header("Location: " . baseURL . "/home/index");
        } else {
            $anggotaModel = $this->model('Anggota');
            $anggota = $anggotaModel->authenticate($username, $password);

            if ($anggota) {
                $_SESSION['user_nim'] = $anggota['nim'];
                // echo "NIM: " . $_SESSION['user_nim'];
                header("Location: " . baseURL . "/anggotacontrollers/index");
            } else {
                echo "Username atau password salah";
            }
        }
    }

    public function logout(){
        session_start();
        session_unset();
        session_destroy();
        header("Location: " . baseURL . "/login");
        exit;
    }
}