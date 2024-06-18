<?php
    require 'connection.php';
    
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sqlAdmin = "INSERT INTO admin (nama, password, jk) VALUES 
    ('Admin1', 'password1', 'pria'),
    ('Admin2', 'password2', 'wanita')";

if ($conn->query($sqlAdmin) === TRUE) {
    echo "Admin records created successfully<br>";
} else {
    echo "Error: " . $sqlAdmin . "<br>" . $conn->error . "<br>";
}


$sqlAnggota = "INSERT INTO anggota (nim, nama, jk, alamat, no_tlp) VALUES 
    ('17221009', 'Rifki Ainul Yaqin', 'pria', 'JL. Antapni GG. Sukapura', 123456),
    ('17221000', 'Anggota2', 'wanita', 'Alamat2', 654321)";

if ($conn->query($sqlAnggota) === TRUE) {
    echo "Anggota records created successfully<br>";
} else {
    echo "Error: " . $sqlAnggota . "<br>" . $conn->error . "<br>";
}


$sqlBuku = "INSERT INTO buku (judul, rak, stok, status) VALUES 
    ('Buku1', 'A', 10, 'Tersedia'),
    ('Buku2', 'B', 5, 'Tersedia')";

if ($conn->query($sqlBuku) === TRUE) {
    echo "Buku records created successfully<br>";
} else {
    echo "Error: " . $sqlBuku . "<br>" . $conn->error . "<br>";
}

$conn->close();