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
    ('17221027', 'Yafi Fahriza Akhsan', 'pria', 'Jl. Yang Di Ridhoi Allah', 0899),
    ('17221028', 'Azilma ny', 'wanita', 'lembang ', 0895),
    ('17223005', 'Wilda Agustina', 'wanita', 'Rancaekek', 0899)";

if ($conn->query($sqlAnggota) === TRUE) {
    echo "Anggota records created successfully<br>";
} else {
    echo "Error: " . $sqlAnggota . "<br>" . $conn->error . "<br>";
}


$sqlBuku = "INSERT INTO buku (judul, author, kategori, deskripsi, gambar, rak, stok, status) VALUES 
    ('All These Wonders: True Stories About Facing',   'Catherine Burns', 'Autobiography', 'Nan', '1.png', 'A', 10, 'Tersedia'),
    ('The Handbook of Forgotten Skills: Timeless Fun for a New Generation', 'Elaine Batiste', 'Pelajaran', 'Elaine Batiste and Natalie Crowley invite readers to turn the clock back to a simpler time and unlock hours of fun as they discover how to: Tie knots, Make a bird feeder, etc', '2.png', 'B', 10, 'Tersedia'),
    ('An Unofficial Guide to the World of Studio Ghibli', 'Michael Leader', 'Anak Anak', 'From the creators of the podcast and bestselling book Ghibliotheque , this is a young film fans comprehensive guide to one of the most exciting and influential film studios in cinema history, creators of beloved classics ranging from Spirited Away and My Neighbour Totoro to Ponyo and Kikis Delivery Service . Across eight chapters, we will get up close and personal with the movies, learn whos who at the Oscar-winning studio and explore the impact that Ghibli World has left on our planet.', '3.png', 'C', 10, 'Tersedia'),
    ('essential 20s: 20 essential items for every room in a 20-Somethings First Place', 'Chronicle Books ', 'Pelajaran', 'From the medicine cabinet to the closet, Essential 20s is an illustrated guidebook for the 20 basic items every young adult needs in each nook and cranny of their first place. Topics include the closet (basic and seasonal clothes for both men and women), pantry, refrigerator, medicine cabinet, toolbox, all major rooms, and more. With charming illustrations and foil on the cover, this giftable package is essential reading for anyone getting ready to move into their first home away from home.', '4.png', 'D', 10, 'Tersedia')";

if ($conn->query($sqlBuku) === TRUE) {
    echo "Buku records created successfully<br>";
} else {
    echo "Error: " . $sqlBuku . "<br>" . $conn->error . "<br>";
}

$conn->close();