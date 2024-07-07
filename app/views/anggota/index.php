<div class="container mt-3">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
        Tambah Anggota
    </button>
    <!-- View Data Anggota -->
    <h1>Data Anggota</h1>
    <ul class="list-group">
        <?php foreach($data['anggota'] as $anggota):?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?= $anggota['nim']?>
                <a href="<?= baseURL; ?>/anggota/detail/<?= $anggota['nim']; ?>" class="d-flex justify-content-between align-items-center">Detail</a>
                <a href="<?= baseURL; ?>/anggota/hapusAnggota/<?= $anggota['nim']; ?>" class="d-flex justify-content-between align-items-center">Hapus</a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

<!-- CRUD Insert anggota -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambahin Anggota</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <!-- Form Tambah Anggota -->
        <form action="<?= baseURL; ?>/anggota/tambahAnggota" method="post">
        
          <div class="form-group">
            <label for="nim">NIM</label>
            <input type="varchar" placeholder="11 Karakter" class="form-control" id="nim" name="nim" required>
          </div>

          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
          </div>

          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" required>
          </div>

          <div class="form-group">
            <label for="jk">Jenis Kelamin</label>
            <select class="form-control" id="jk" name="jk" required>
              <option value="pria">Pria</option>
              <option value="wanita">Wanita</option>
            </select>
          </div>

          <div class="form-group">
            <label for="no_tlp">No Telepon</label>
            <input type="varchar" placeholder="17 Digit" class="form-control" id="no_tlp" name="no_tlp" required>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambahin</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>