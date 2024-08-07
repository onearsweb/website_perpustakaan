-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jul 2024 pada 14.45
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `jk` enum('pria','wanita') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `password`, `jk`) VALUES
(1, 'Admin', '12345678', 'pria');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `nim` varchar(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `jk` enum('pria','wanita') NOT NULL,
  `alamat` text NOT NULL,
  `no_tlp` varchar(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`nim`, `nama`, `jk`, `alamat`, `no_tlp`) VALUES
('17221009', 'Rifki Ainul Yaqin', 'pria', 'JL. Antapani GG. Sukapura', '896'),
('17221027', 'Yafi Fahriza Akhsan', 'pria', 'Jl. Yang Di Ridhoi Allah', '899'),
('17221028', 'Azilma ny', 'wanita', 'lembang ', '895'),
('17223005', 'Wilda Agustina', 'wanita', 'Rancaekek', '899'),
('17223016', 'Reddis Angel', 'wanita', ' Jl.Jatihandap', '812');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `author` varchar(50) NOT NULL,
  `kategori` enum('Pelajaran','Novel','Komik','Majalah','Filsafat','Sejarah','Cerpen','Kesehatan','Sastra','Agama','Fantasi','Anak Anak','Autobiography') NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL,
  `rak` enum('A','B','C','D') NOT NULL,
  `stok` int(11) NOT NULL,
  `status` enum('Tersedia','Kosong') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul`, `author`, `kategori`, `deskripsi`, `gambar`, `rak`, `stok`, `status`) VALUES
(1, 'All These Wonders: True Stories About Facing', 'Catherine Burns', 'Autobiography', 'Nan', '1.png', 'A', 10, 'Tersedia'),
(2, 'The Handbook of Forgotten Skills: Timeless Fun for a New Generation', 'Elaine Batiste', 'Pelajaran', 'Elaine Batiste and Natalie Crowley invite readers to turn the clock back to a simpler time and unlock hours of fun as they discover how to: Tie knots, Make a bird feeder, etc', '2.png', 'B', 10, 'Tersedia'),
(3, 'An Unofficial Guide to the World of Studio Ghibli', 'Michael Leader', 'Anak Anak', 'From the creators of the podcast and bestselling book Ghibliotheque , this is a young film fans comprehensive guide to one of the most exciting and influential film studios in cinema history, creators of beloved classics ranging from Spirited Away and My Neighbour Totoro to Ponyo and Kikis Delivery Service . Across eight chapters, we will get up close and personal with the movies, learn whos who at the Oscar-winning studio and explore the impact that Ghibli World has left on our planet.', '3.png', 'C', 10, 'Tersedia'),
(4, 'essential 20s: 20 essential items for every room in a 20-Somethings First Place', 'Chronicle Books ', 'Pelajaran', 'From the medicine cabinet to the closet, Essential 20s is an illustrated guidebook for the 20 basic items every young adult needs in each nook and cranny of their first place. Topics include the closet (basic and seasonal clothes for both men and women), pantry, refrigerator, medicine cabinet, toolbox, all major rooms, and more. With charming illustrations and foil on the cover, this giftable package is essential reading for anyone getting ready to move into their first home away from home.', '4.png', 'D', 10, 'Tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `nim_anggota` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjam`
--

CREATE TABLE `pinjam` (
  `id` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `nim_anggota` varchar(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tenggat_pengembalian` date NOT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `status` enum('Dipinjam','Telat','Dikembalikan') NOT NULL,
  `jumlah_pinjam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `nim_anggota` (`nim_anggota`);

--
-- Indeks untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `nim_anggota` (`nim_anggota`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`nim_anggota`) REFERENCES `anggota` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  ADD CONSTRAINT `pinjam_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pinjam_ibfk_2` FOREIGN KEY (`nim_anggota`) REFERENCES `anggota` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
