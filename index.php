<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">
            <div class="content-wrapper">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="card">
                        <div class="card-header">
                        <h1>Data Buku</h1>
                        <!-- Tombol untuk tambah buku -->
                            <a href="<?= baseURL ?>/buku/tambah" class="btn btn-primary">Tambah Buku</a>
                            <!-- Tabel untuk menampilkan data buku -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Author</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Rak</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data['buku'] as $buku) : ?>
                                        <tr>
                                            <td><?= $buku['id']; ?></td>
                                            <td><?= $buku['judul']; ?></td>
                                            <td><?= $buku['author']; ?></td>
                                            <td><?= $buku['kategori']; ?></td>
                                            <td><?= $buku['rak']; ?></td>
                                            <td><?= $buku['status']; ?></td>
                                            <td>
                                                <a href="<?= baseURL ?>/buku/detail/<?= $buku['id']; ?>" class="btn btn-sm btn-info">Detail</a>
                                                <a href="<?= baseURL ?>/buku/edit/<?= $buku['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                                <a href="<?= baseURL ?>/buku/hapusBuku/<?= $buku['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">Hapus</a>
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