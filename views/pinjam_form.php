<!DOCTYPE html>
<html>
<head>
    <title>Form Peminjaman</title>
</head>
<body>
    <h1>Form Peminjaman Buku</h1>
    <form method="POST" action="?action=pinjam">
        <input type="hidden" name="id_buku" value="<?php echo $_GET['id_buku']; ?>">
        <label for="id_admin">ID Admin:</label>
        <input type="text" id="id_admin" name="id_admin" required><br>
        <label for="nim_anggota">NIM Anggota:</label>
        <input type="text" id="nim_anggota" name="nim_anggota" required><br>
        <label for="tgl_pinjam">Tanggal Pinjam:</label>
        <input type="date" id="tgl_pinjam" name="tgl_pinjam" required><br>
        <label for="tenggat_pengembalian">Tenggat Pengembalian:</label>
        <input type="date" id="tenggat_pengembalian" name="tenggat_pengembalian" required><br>
        <label for="jumlah_pinjam">Jumlah Pinjam:</label>
        <input type="number" id="jumlah_pinjam" name="jumlah_pinjam" required><br>
        <input type="submit" value="Pinjam Buku">
    </form>
</body>
</html>
