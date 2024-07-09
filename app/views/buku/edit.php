<div class="container mt-3">
    <h1>Edit Data Buku</h1>
    <form action="<?= baseURL; ?>/buku/updateBuku" method="post">
        <input type="hidden" name="id" value="<?= $data['buku']['id']; ?>">
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="<?= $data['buku']['judul']; ?>" required>
        </div>

        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" class="form-control" id="author" name="author" value="<?= $data['buku']['author']; ?>" required>
        </div>

        <div class="form-group">
            <label for="kategori">Kategori</label>
            <select class="form-control" id="kategori" name="kategori" required>
                <option value="Pelajaran" <?= $data['buku']['kategori'] == 'Pelajaran' ? 'selected' : ''; ?>>Pelajaran</option>
                <option value="Novel" <?= $data['buku']['kategori'] == 'Novel' ? 'selected' : ''; ?>>Novel</option>
                <option value="Komik" <?= $data['buku']['kategori'] == 'Komik' ? 'selected' : ''; ?>>Komik</option>
                <option value="Majalah" <?= $data['buku']['kategori'] == 'Majalah' ? 'selected' : ''; ?>>Majalah</option>
                <option value="Filsafat" <?= $data['buku']['kategori'] == 'Filsafat' ? 'selected' : ''; ?>>Filsafat</option>
                <option value="Sejarah" <?= $data['buku']['kategori'] == 'Sejarah' ? 'selected' : ''; ?>>Sejarah</option>
                <option value="Cerpen" <?= $data['buku']['kategori'] == 'Cerpen' ? 'selected' : ''; ?>>Cerpen</option>
                <option value="Kesehatan" <?= $data['buku']['kategori'] == 'Kesehatan' ? 'selected' : ''; ?>>Kesehatan</option>
                <option value="Sastra" <?= $data['buku']['kategori'] == 'Sastra' ? 'selected' : ''; ?>>Sastra</option>
                <option value="Agama" <?= $data['buku']['kategori'] == 'Agama' ? 'selected' : ''; ?>>Agama</option>
                <option value="Fantasi" <?= $data['buku']['kategori'] == 'Fantasi' ? 'selected' : ''; ?>>Fantasi</option>
                <option value="Anak Anak" <?= $data['buku']['kategori'] == 'Anak Anak' ? 'selected' : ''; ?>>Anak Anak</option>
                <option value="Autobiography" <?= $data['buku']['kategori'] == 'Autobiography' ? 'selected' : ''; ?>>Autobiography</option>
            </select>
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required><?= $data['buku']['deskripsi']; ?></textarea>
        </div>

        <div class="form-group">
            <label for="gambar">Link Gambar</label>
            <input type="text" class="form-control" id="gambar" name="gambar" value="<?= $data['buku']['gambar']; ?>" required>
        </div>

        <div class="form-group">
            <label for="rak">Rak</label>
            <select class="form-control" id="rak" name="rak" required>
                <option value="A" <?= $data['buku']['rak'] == 'A' ? 'selected' : ''; ?>>A</option>
                <option value="B" <?= $data['buku']['rak'] == 'B' ? 'selected' : ''; ?>>B</option>
                <option value="C" <?= $data['buku']['rak'] == 'C' ? 'selected' : ''; ?>>C</option>
                <option value="D" <?= $data['buku']['rak'] == 'D' ? 'selected' : ''; ?>>D</option>
            </select>
        </div>

        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="number" class="form-control" id="stok" name="stok" value="<?= $data['buku']['stok']; ?>" required>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="Tersedia" <?= $data['buku']['status'] == 'Tersedia' ? 'selected' : ''; ?>>Tersedia</option>
                <option value="Kosong" <?= $data['buku']['status'] == 'Kosong' ? 'selected' : ''; ?>>Kosong</option>
            </select>
        </div>

        <div class="modal-footer">
            <a href="<?= baseURL; ?>/buku" class="btn btn-secondary">Batal</a>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </div>
    </form>
</div>
