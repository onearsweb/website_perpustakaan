<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['anggota']['nim']; ?></h5>
            <p class="card-text">ID : <?= $data['anggota']['nama']; ?></p>
            <p class="card-text">RAK : <?= $data['anggota']['jk']; ?></p>
            <p class="card-text">STOK : <?= $data['anggota']['alamat']; ?></p>
            <p class="card-text">Status : <?= $data['anggota']['no_tlp']; ?></p>
            <a href="<?= baseURL; ?>/anggota" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>