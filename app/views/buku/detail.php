<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['buku']['judul']; ?></h5>
            <p class="card-text">ID : <?= $data['buku']['id']; ?></p>
            <p class="card-text">RAK : <?= $data['buku']['rak']; ?></p>
            <p class="card-text">STOK : <?= $data['buku']['stok']; ?></p>
            <p class="card-text">Status : <?= $data['buku']['status']; ?></p>
            <a href="<?= baseURL; ?>/buku" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>