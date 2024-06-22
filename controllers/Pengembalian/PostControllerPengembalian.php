<?php
require 'database/connection.php';

function kembalikanBuku($id_pinjam, $tgl_kembali, $conn) {
    // Start a transaction to ensure atomicity
    $conn->begin_transaction();

    try {
        // Update the loan record to mark the book as returned
        $query = "UPDATE pinjam SET tgl_kembali = ?, status = CASE
                      WHEN ? > tenggat_pengembalian THEN 'Telat'
                      ELSE 'Dikembalikan'
                  END
                  WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssi", $tgl_kembali, $tgl_kembali, $id_pinjam);

        if (!$stmt->execute()) {
            throw new Exception("Gagal mengupdate status pengembalian buku: " . $stmt->error);
        }

        // Fetch the book ID from the loan record
        $query = "SELECT id_buku FROM pinjam WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $id_pinjam);

        if (!$stmt->execute()) {
            throw new Exception("Gagal mendapatkan ID buku: " . $stmt->error);
        }

        $result = $stmt->get_result();
        if ($result->num_rows === 0) {
            throw new Exception("ID pinjam tidak ditemukan.");
        }

        $row = $result->fetch_assoc();
        $id_buku = $row['id_buku'];

        $query = "UPDATE buku SET stok = stok + 1 WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $id_buku);

        if (!$stmt->execute()) {
            throw new Exception("Gagal mengupdate stok buku: " . $stmt->error);
        }

        $conn->commit();
        return "Pengembalian buku berhasil.";

    } catch (Exception $e) {
        $conn->rollback();
        return "Gagal melakukan pengembalian buku: " . $e->getMessage();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_pinjam = isset($_POST['id_pinjam']) ? $_POST['id_pinjam'] : null;
    $tgl_kembali = date('Y-m-d');

    if ($id_pinjam) {
        $result = kembalikanBuku($id_pinjam, $tgl_kembali, $conn);
        if ($result === "Pengembalian buku berhasil.") {
            header("Location: /website_perpustakaan/pengembalian");
            exit();
        } else {
            echo $result;
        }
    } else {
        echo "ID pinjam tidak valid.";
    }
}
