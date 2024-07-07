<div class="container mt-3">
    <h1>Edit Anggota</h1>
    <form action="<?= baseURL; ?>/anggota/updateAnggota" method="post">
        <input type="hidden" name="nim" value="<?= $data['anggota']['nim']; ?>">

        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['anggota']['nama']; ?>" required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $data['anggota']['alamat']; ?>" required>
        </div>

        <div class="form-group">
            <label for="jk">Jenis Kelamin</label>
            <select class="form-control" id="jk" name="jk" required>
                <option value="pria" <?= $data['anggota']['jk'] == 'pria' ? 'selected' : ''; ?>>Pria</option>
                <option value="wanita" <?= $data['anggota']['jk'] == 'wanita' ? 'selected' : ''; ?>>Wanita</option>
            </select>
        </div>

        <div class="form-group">
            <label for="no_tlp">No Telepon</label>
            <input type="text" class="form-control" id="no_tlp" name="no_tlp" value="<?= $data['anggota']['no_tlp']; ?>" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
</div>
