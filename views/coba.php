<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <ul>
        <?php foreach ($bukuList as $buku): ?>
            <li><?php echo $buku['judul']; ?> (Stok: <?php echo $buku['stok']; ?>)</li>
        <?php endforeach; ?>
    </ul>
    <a href="?action=form">Pinjam Buku</a>
</body>
</html>
