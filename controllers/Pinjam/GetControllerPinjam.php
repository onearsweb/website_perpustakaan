<?php
require 'database/connection.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM buku";
$result = $conn->query($query);

$bukuList = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $bukuList[] = $row;
    }
} else {
    // echo "Tidak ada buku tersedia saat ini.";
}

$conn->close();

// require 'views/coba.php';