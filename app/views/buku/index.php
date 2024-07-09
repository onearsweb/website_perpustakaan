<div class="container mt-3">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
    Tambah Buku
    </button>
    <!-- View Data Buku -->
    <h1>Data Buku</h1>
    <ul class="list-group">
        <?php foreach($data['buku'] as $buku):?>
            <li class="list-group-item ">
                <?= $buku['judul']?>
                <a href="<?= baseURL; ?>/buku/detail/<?= $buku['id']; ?>" class="badge badge-primary float-right">Detail</a>
                <a href="<?= baseURL; ?>/buku/hapusBuku/<?= $buku['id']; ?>" class="badge badge-danger float-right ml-2">Hapus</a>
                <a href="<?= baseURL; ?>/buku/editBuku/<?= $buku['id']; ?>" class="badge badge-success float-right ml-2">Edit</a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>


<!-- CRUD Insert Buku -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambahin Buku</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <!-- Form Tambah Buku -->
        <form action="<?= baseURL; ?>/buku/tambahBuku" method="post">
        
          <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" required>
          </div>

          <div class="form-group">
            <label for="rak">Rak</label>
            <select class="form-control" id="rak" name="rak" required>
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="C">C</option>
              <option value="D">D</option>
            </select>
          </div>

          <div class="form-group">
            <label for="stok">Stok</label>
            <input type="number" class="form-control" id="stok" name="stok" required>
          </div>

          <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
              <option value="Tersedia">Tersedia</option>
              <option value="Kosong">Kosong</option>
            </select>
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
