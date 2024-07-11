<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">
            <div class="content-wrapper">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="card">
                        <div class="card-header">
                            <h5>Data Anggota</h5>
                            <a href="<?= baseURL ?>/anggota/tambah" class="btn btn-primary float-end">Tambah Anggota</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">NIM</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">No. Telepon</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data['anggota'] as $anggota) : ?>
                                        <tr>
                                            <td><?= $anggota['nim']; ?></td>
                                            <td><?= $anggota['nama']; ?></td>
                                            <td><?= $anggota['jk']; ?></td>
                                            <td><?= $anggota['alamat']; ?></td>
                                            <td><?= $anggota['no_tlp']; ?></td>
                                            <td>
                                                <a href="<?= baseURL ?>/anggota/edit/<?= $anggota['nim']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="<?= baseURL ?>/anggota/hapus/<?= $anggota['nim']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
