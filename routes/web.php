<?php
require 'controllers/PeminjamanController.php';

$peminjamanController = new PeminjamanController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action']) && $_POST['action'] == 'pinjam') {
        $peminjamanController->pinjam();
    }
} else {
    if (isset($_GET['action']) && $_GET['action'] == 'form') {
        $peminjamanController->pinjamForm();
    } else {
        $peminjamanController->index();
    }
}
