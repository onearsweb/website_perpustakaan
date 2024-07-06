<?php
require 'connection.php';

$dropTablesSql = "DROP TABLE IF EXISTS pinjam, buku, anggota, admin, cart";
if ($conn->multi_query($dropTablesSql)) {
    do {
        if ($result = $conn->store_result()) {
            $result->free();
        }
    } while ($conn->next_result());
    echo "Tables dropped successfully<br>";
} else {
    echo "Error dropping tables: " . $conn->error . "<br>";
}

$sql = "
CREATE TABLE `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `jk` enum('pria','wanita') NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `anggota` (
  `nim` varchar(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `jk` enum('pria','wanita') NOT NULL,
  `alamat` text NOT NULL,
  `no_tlp` varchar(17) NOT NULL,
  PRIMARY KEY (`nim`)
);

CREATE TABLE `buku` (
  `id` int NOT NULL AUTO_INCREMENT,
  `judul` varchar(250) NOT NULL,
  `author` varchar(50) NOT NULL,
  `kategori` enum('Pelajaran','Novel', 'Komik', 'Majalah', 'Filsafat', 'Sejarah', 'Cerpen', 'Kesehatan', 'Sastra', 'Agama', 'Fantasi', 'Anak Anak') NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL,
  `rak` enum('A','B','C','D') NOT NULL,
  `stok` int NOT NULL,
  `status` enum('Tersedia','Kosong') NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `pinjam` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_buku` int NOT NULL,
  `nim_anggota` varchar(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tenggat_pengembalian` date NOT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `status` enum('Dipinjam','Telat','Dikembalikan') NOT NULL,
  `jumlah_pinjam` int NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`id_buku`) REFERENCES `buku`(`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (`nim_anggota`) REFERENCES `anggota`(`nim`) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE `cart` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_buku` int NOT NULL,
  `nim_anggota` varchar(11) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`id_buku`) REFERENCES `buku`(`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (`nim_anggota`) REFERENCES `anggota`(`nim`) ON DELETE CASCADE ON UPDATE CASCADE
);

";

if ($conn->multi_query($sql)) {
    do {
        if ($result = $conn->store_result()) {
            $result->free();
        }
    } while ($conn->next_result());
    echo "Tables created successfully";
} else {
    echo "Error creating tables: " . $conn->error;
}

$conn->close();
