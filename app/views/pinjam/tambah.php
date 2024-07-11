<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">
            <div class="content-wrapper">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="card">
                        <div class="card-header">
                            <h5>Tambah Peminjaman Baru</h5>
                        </div>
                        <div class="card-body">
                            <form action="<?= baseURL ?>/pinjam/tambahPeminjaman" method="post">
                                <div class="mb-3">
                                    <label for="id_buku" class="form-label">ID Buku</label>
                                    <input type="number" class="form-control" id="id_buku" name="id_buku" required>
                                </div>
                                <div class="mb-3">
                                    <label for="nim_anggota" class="form-label">NIM Anggota</label>
                                    <input type="text" class="form-control" id="nim_anggota" name="nim_anggota" required>
                                </div>
                                <div class="mb-3">
                                    <label for="tgl_pinjam" class="form-label">Tanggal Pinjam</label>
                                    <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam" required>
                                </div>
                                <div class="mb-3">
                                    <label for="tenggat_pengembalian" class="form-label">Tenggat Pengembalian</label>
                                    <input type="date" class="form-control" id="tenggat_pengembalian" name="tenggat_pengembalian" required>
                                </div>
                                <div class="mb-3">
                                    <label for="tgl_kembali" class="form-label">Tanggal Kembali</label>
                                    <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali">
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-select" id="status" name="status" required>
                                        <option value="Dipinjam">Dipinjam</option>
                                        <option value="Telat">Telat</option>
                                        <option value="Dikembalikan">Dikembalikan</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="jumlah_pinjam" class="form-label">Jumlah Pinjam</label>
                                    <input type="number" class="form-control" id="jumlah_pinjam" name="jumlah_pinjam" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="<?= baseURL ?>/pinjam" class="btn btn-secondary">Batal</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
