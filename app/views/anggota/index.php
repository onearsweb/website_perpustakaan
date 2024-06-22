<div class="container">
    <h1>Data Anggota</h1>
    <?php foreach($data['anggota'] as $anggota): ?>
        <ul>
            <li>NIM<?= $anggota['nim']; ?></li>
            <li>NAMA<?= $anggota['nama']; ?></li>
            <li>Jenis Kelamin<?= $anggota['jk']; ?></li>
            <li>ALAMAT<?= $anggota['alamat']; ?></li>
            <li>NO TELEPON<?= $anggota['no_tlp']; ?></li>
        </ul>
    <?php endforeach; ?>
</div>