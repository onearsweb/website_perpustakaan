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
    ('17221009', 'Rifki Ainul Yaqin', 'pria', 'JL. Antapani GG. Sukapura', 0896),
    ('17223016', 'Reddis Angel', 'wanita', ' Jl.Jatihandap', 0812),
    ('1722107', 'Yapi', 'pria', 'Jl. Yang Di Ridhoi Allah', 0899),
    ('17221028', 'Azilma ny', 'wanita', 'lembang ', 0895),
    ('17223005', 'Wilda Agustina', 'wanita', 'Rancaekek', 0899)";

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