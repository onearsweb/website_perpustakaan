<?php
require 'database/connection.php';

$request = $_SERVER['REQUEST_URI'];

// Hilangkan query string dari URL jika ada
$request = strtok($request, '?');

$request = str_replace('/website_perpustakaan', '', $request);

switch ($request) {
    case '/':
        require 'views/login.php';
        break;
    case '/login':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            require 'controllers/Login/Login.php'; 
        }
        break;
    case '/buku':
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            require 'controllers/Pinjam/GetControllerPinjam.php'; 
        } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
            require 'controllers/Pinjam/PostControllerPinjam.php';
        } else {
            http_response_code(405);
            echo "Method Not Allowed";
        }
        break;
    case '/pengembalian':
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            require 'controllers/Pengembalian/GetControllerPengembalian.php'; 
        } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
            require 'controllers/Pengembalian/PostControllerPengembalian.php';
        } else {
            http_response_code(405);
            echo "Method Not Allowed";
        }
        break;
    default:
        http_response_code(404);
        echo "Page not found.";
        break;
}
