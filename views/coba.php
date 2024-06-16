<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <ul>
        <?php foreach ($bukuList as $buku): ?>
            <li><?php echo $buku['judul']; ?> (Stok: <?php echo $buku['stok']; ?>) - <a href="?action=pinjamForm&id_buku=<?php echo $buku['id']; ?>">Pinjam</a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
