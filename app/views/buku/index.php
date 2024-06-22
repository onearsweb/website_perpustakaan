<div class="container">
    <div class="row">
        <div class="col">
        <h1>Data Buku</h1>
        <ul class="list-group">
            <?php foreach($data['buku'] as $buku):?>
                <li class="list-group-item">
                    <?= $buku['judul']?>
                    <a href="<?= baseURL; ?>/buku/detail/<?= $buku['id']; ?>" class="d-flex justify-content-between align-items-center">Detail</a>
                </li>
            <?php endforeach; ?>
        </ul>
        </div>
    </div>
</div>