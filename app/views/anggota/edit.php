<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">
            <div class="content-wrapper">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="card">
                        <div class="card-header">
                            <h5>Edit Data Anggota</h5>
                        </div>
                        <div class="card-body">
                            <form action="<?= baseURL ?>/anggota/updateAnggota" method="post">
                                <input type="hidden" name="nim" value="<?= $data['anggota']['nim']; ?>">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['anggota']['nama']; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="jk" class="form-label">Jenis Kelamin</label>
                                    <select class="form-select" id="jk" name="jk" required>
                                        <option value="pria" <?= ($data['anggota']['jk'] == 'pria') ? 'selected' : ''; ?>>Pria</option>
                                        <option value="wanita" <?= ($data['anggota']['jk'] == 'wanita') ? 'selected' : ''; ?>>Wanita</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea class="form-control" id="alamat" name="alamat" rows="3" required><?= $data['anggota']['alamat']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="no_tlp" class="form-label">No. Telepon</label>
                                    <input type="text" class="form-control" id="no_tlp" name="no_tlp" value="<?= $data['anggota']['no_tlp']; ?>" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                <a href="<?= baseURL ?>/anggota" class="btn btn-secondary">Batal</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
