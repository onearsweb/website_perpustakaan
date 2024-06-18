<?php
require 'database/connection.php';

function pinjamBuku($id_buku, $id_admin, $nim_anggota, $tgl_pinjam, $tenggat_pengembalian, $jumlah_pinjam, $conn) {
    $query = "INSERT INTO pinjam (id_buku, id_admin, nim_anggota, tgl_pinjam, tenggat_pengembalian, jumlah_pinjam, status)
              VALUES (?, ?, ?, ?, ?, ?, 'Dipinjam')";
    
    $stmt = $conn->prepare($query);
    
    $stmt->bind_param("iisssi", $id_buku, $id_admin, $nim_anggota, $tgl_pinjam, $tenggat_pengembalian, $jumlah_pinjam);

    if ($stmt->execute()) {
        $update_query = "UPDATE buku SET stok = stok - ? WHERE id = ?";
        $update_stmt = $conn->prepare($update_query);
        $update_stmt->bind_param("ii", $jumlah_pinjam, $id_buku);
        
        if ($update_stmt->execute()) {
            return "Peminjaman berhasil";
        } else {
            return "Gagal mengurangi stok buku";
        }
    } else {
        return "Gagal melakukan peminjaman";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_buku = isset($_POST['id_buku']) ? $_POST['id_buku'] : null;
    $id_admin = isset($_POST['id_admin']) ? $_POST['id_admin'] : null;
    $nim_anggota = isset($_POST['nim_anggota']) ? $_POST['nim_anggota'] : null;
    $tgl_pinjam = isset($_POST['tgl_pinjam']) ? $_POST['tgl_pinjam'] : null;
    $tenggat_pengembalian = isset($_POST['tenggat_pengembalian']) ? $_POST['tenggat_pengembalian'] : null;
    $jumlah_pinjam = isset($_POST['jumlah_pinjam']) ? $_POST['jumlah_pinjam'] : null;

    if ($id_buku && $id_admin && $nim_anggota && $tgl_pinjam && $tenggat_pengembalian && $jumlah_pinjam) {
        echo pinjamBuku($id_buku, $id_admin, $nim_anggota, $tgl_pinjam, $tenggat_pengembalian, $jumlah_pinjam, $conn);
    } else {
        echo "Ada parameter yang kosong. Gagal melakukan peminjaman.";
    }
}
