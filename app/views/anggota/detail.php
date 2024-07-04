<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['anggota']['nim']; ?></h5>
            <p class="card-text">Nama : <?= $data['anggota']['nama']; ?></p>
            <p class="card-text">Jenis Kelamin : <?= $data['anggota']['jk']; ?></p>
            <p class="card-text">Alamat : <?= $data['anggota']['alamat']; ?></p>
            <p class="card-text">No Telepon : <?= $data['anggota']['no_tlp']; ?></p>
            <a href="<?= baseURL; ?>/anggota" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>