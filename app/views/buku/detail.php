<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">
            <div class="content-wrapper">
                <div class="container-xxl flex-grow-1 container-p-y"> 
                <div class="card-body">
                    <h5 class="card-title"><?= $data['title']; ?></h5>
                    <p class="card-text">ID : <?= $data['buku']['id']; ?></p>
                    <p class="card-text">Judul : <?= $data['buku']['judul']; ?></p>
                    <p class="card-text">Author : <?= $data['buku']['author']; ?></p>
                    <p class="card-text">Kategori : <?= $data['buku']['kategori']; ?></p>
                    <p class="card-text">Deskripsi : <?= $data['buku']['deskripsi']; ?></p>
                    <p class="card-text">Gambar : <?= $data['buku']['gambar']; ?></p>
                    <p class="card-text">RAK : <?= $data['buku']['rak']; ?></p>
                    <p class="card-text">STOK : <?= $data['buku']['stok']; ?></p>
                    <p class="card-text">Status : <?= $data['buku']['status']; ?></p>
                    <a href="<?= baseURL; ?>/buku" class="btn btn-primary">Kembali</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>