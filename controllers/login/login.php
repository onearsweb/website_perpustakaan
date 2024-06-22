<?php
session_start();
include('database/connection.php');

$username = $_POST['username'];
$password = $_POST['password'];

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
        $_SESSION['user_name'] = $row['nama'];
        header("Location: /website_perpustakaan/buku");
    } else {
        echo "Username atau password salah";
    }
}

$conn->close();
