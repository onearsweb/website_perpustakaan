<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">
            <div class="content-wrapper">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">ID Buku</th>
                                        <th scope="col">NIM Anggota</th>
                                        <th scope="col">Tanggal Pinjam</th>
                                        <th scope="col">Tenggat Pengembalian</th>
                                        <th scope="col">Tanggal Kembali</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Jumlah Pinjam</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data['peminjaman'] as $peminjaman) : ?>
                                        <tr>
                                            <td><?= $peminjaman['id']; ?></td>
                                            <td><?= $peminjaman['id_buku']; ?></td>
                                            <td><?= $peminjaman['nim_anggota']; ?></td>
                                            <td><?= $peminjaman['tgl_pinjam']; ?></td>
                                            <td><?= $peminjaman['tenggat_pengembalian']; ?></td>
                                            <td><?= $peminjaman['tgl_kembali']; ?></td>
                                            <td><?= $peminjaman['status']; ?></td>
                                            <td><?= $peminjaman['jumlah_pinjam']; ?></td>
                                            <td>
                                                <a href="<?= baseURL ?>/pinjam/edit/<?= $peminjaman['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="<?= baseURL ?>/pinjam/hapus/<?= $peminjaman['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
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
