<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">
            <div class="content-wrapper">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="card">
                        <div class="card-header">
                            <h5>Tambah Buku Baru</h5>
                        </div>
                        <div class="card-body">
                            <form action="<?= baseURL ?>/buku/tambahBuku" method="post">
                                <div class="mb-3">
                                    <label for="judul" class="form-label">Judul Buku</label>
                                    <input type="text" class="form-control" id="judul" name="judul" required>
                                </div>
                                <div class="mb-3">
                                    <label for="author" class="form-label">Penulis</label>
                                    <input type="text" class="form-control" id="author" name="author" required>
                                </div>
                                <div class="mb-3">
                                    <label for="kategori" class="form-label">Kategori</label>
                                    <select class="form-select" id="kategori" name="kategori" required>
                                        <option value="Pelajaran">Pelajaran</option>
                                        <option value="Novel">Novel</option>
                                        <option value="Komik">Komik</option>
                                        <option value="Majalah">Majalah</option>
                                        <option value="Filsafat">Filsafat</option>
                                        <option value="Sejarah">Sejarah</option>
                                        <option value="Cerpen">Cerpen</option>
                                        <option value="Kesehatan">Kesehatan</option>
                                        <option value="Sastra">Sastra</option>
                                        <option value="Agama">Agama</option>
                                        <option value="Fantasi">Fantasi</option>
                                        <option value="Anak Anak">Anak Anak</option>
                                        <option value="Autobiography">Autobiography</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="gambar" class="form-label">URL Gambar</label>
                                    <input type="text" class="form-control" id="gambar" name="gambar" required>
                                </div>
                                <div class="mb-3">
                                    <label for="rak" class="form-label">Rak Buku</label>
                                    <select class="form-select" id="rak" name="rak" required>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="stok" class="form-label">Stok</label>
                                    <input type="number" class="form-control" id="stok" name="stok" required>
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-select" id="status" name="status" required>
                                        <option value="Tersedia">Tersedia</option>
                                        <option value="Kosong">Kosong</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="<?= baseURL ?>/buku" class="btn btn-secondary">Batal</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
