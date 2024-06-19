<?php
session_start();
include('../../database/connection.php');

$username = $_POST['username'];
$password = $_POST['password'];

// Cek di tabel admin
$sql = "SELECT * FROM admin WHERE nama='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['user_id'] = $row['id'];
    header("Location: ../../views/admin/anggota.php");
} else {
    $sql = "SELECT * FROM anggota WHERE nim='$username' AND nim='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['user_nim'] = $row['nim'];
        header("Location: ../../views/anggota/daftar_buku.php");
    } else {
        echo "Username atau password salah";
    }
}

$conn->close();
