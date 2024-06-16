<!DOCTYPE html>
<html>
<head>
    <title>Form Peminjaman</title>
</head>
<body>
    <h1>Form Peminjaman Buku</h1>
    <form method="POST" action="">
        <input type="hidden" name="action" value="pinjam">
        <label for="id_buku">ID Buku:</label>
        <input type="text" id="id_buku" name="id_buku" required><br>
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
