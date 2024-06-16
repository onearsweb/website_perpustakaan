<?php

// Load necessary files and dependencies
require_once 'database/connection.php';
require_once 'controllers/PeminjamanController.php';

// Inisialisasi koneksi
global $conn;

// Mendefinisikan rute menggunakan switch statement
$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
    case 'pinjamForm':
        $controller = new PeminjamanController();
        $controller->pinjamForm();
        break;
    case 'pinjam':
        $controller = new PeminjamanController();
        $controller->pinjam();
        break;
    default:
        $controller = new PeminjamanController();
        $controller->index();
        break;
}
