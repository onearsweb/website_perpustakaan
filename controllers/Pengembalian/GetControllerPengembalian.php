<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_nim']) || !isset($_SESSION['user_name'])) {
    // Redirect or handle unauthorized access
    header("Location: /website_perpustakaan/login.php");
    exit();
}

// Access session variables
$user_nim = $_SESSION['user_nim'];
$user_name = $_SESSION['user_name'];

require 'database/connection.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch loans based on user nim
$query = "SELECT pinjam.id, buku.judul, buku.author, pinjam.tgl_pinjam, pinjam.tenggat_pengembalian, pinjam.tgl_kembali, pinjam.status
          FROM pinjam
          INNER JOIN buku ON pinjam.id_buku = buku.id
          INNER JOIN anggota ON pinjam.nim_anggota = anggota.nim
          WHERE anggota.nim = '$user_nim'
          ORDER BY pinjam.id";

$result = $conn->query($query);

$pinjamList = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $pinjamList[] = $row;
    }
} else {
    // echo "Tidak ada buku yang dipinjam.";
}

$conn->close();

require 'views/Anggota/pengembalian.php';
