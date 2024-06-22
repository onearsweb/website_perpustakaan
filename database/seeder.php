<?php
    require 'connection.php';
    
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sqlAdmin = "INSERT INTO admin (nama, password, jk) VALUES 
    ('Admin', '12345678', 'pria')";

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


$sqlBuku = "INSERT INTO buku (judul, author, kategori, deskripsi, gambar, rak, stok, status) VALUES 
    ('All These Wonders: True Stories About Facing...', 'Rini', 'Fantasi', 'Deskripsi singkat tentang buku ini.', '1.png', 'A', 10, 'Tersedia'),
    ('The Handbook of Forgotten Skills', 'Rika', 'Fantasi', 'Deskripsi singkat tentang buku ini.', '2.png', 'B', 10, 'Tersedia'),
    ('An Unofficial Guide to the World of Studio Ghibli', 'Riza', 'Anak Anak', 'Deskripsi singkat tentang buku ini.', '3.png', 'C', 10, 'Tersedia'),
    ('essential 20s: 20 essential items for every room', 'Adi', 'Pelajaran', 'Deskripsi singkat tentang buku ini.', '4.png', 'D', 10, 'Tersedia')";

if ($conn->query($sqlBuku) === TRUE) {
    echo "Buku records created successfully<br>";
} else {
    echo "Error: " . $sqlBuku . "<br>" . $conn->error . "<br>";
}

$conn->close();