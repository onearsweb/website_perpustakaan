<?php
require 'database/connection.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM pinjam";
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

// require 'views/coba1.php';