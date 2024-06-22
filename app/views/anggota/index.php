<div class="container">
    <h1>Data Anggota</h1>
    <?php foreach($data['anggota'] as $anggota): ?>
        <ul>
            <li><?= $anggota['nim']; ?></li>
            <li><?= $anggota['nama']; ?></li>
            <li><?= $anggota['jk']; ?></li>
            <li><?= $anggota['alamat']; ?></li>
            <li><?= $anggota['no_tlp']; ?></li>
        </ul>
    <?php endforeach; ?>
</div>