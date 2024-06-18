<?php
require 'database/connection.php';

function kembalikanBuku($id_pinjam, $tgl_kembali, $conn) {
    $query = "UPDATE pinjam SET tgl_kembali = ?, status = CASE
                  WHEN tgl_kembali > tenggat_pengembalian THEN 'Telat'
                  ELSE 'Dikembalikan'
              END
              WHERE id = ?";
    $stmt = $conn->prepare($query);
    
    $stmt->bind_param("si", $tgl_kembali, $id_pinjam);

    if ($stmt->execute()) {
        return "Pengembalian buku berhasil.";
    } else {
        return "Gagal melakukan pengembalian buku: " . $conn->error;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_pinjam = isset($_POST['id_pinjam']) ? $_POST['id_pinjam'] : null;
    $tgl_kembali = date('Y-m-d');

    if ($id_pinjam) {
        echo kembalikanBuku($id_pinjam, $tgl_kembali, $conn);
    } else {
        echo "ID pinjam tidak valid.";
    }
}
