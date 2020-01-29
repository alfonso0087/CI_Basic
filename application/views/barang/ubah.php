<div class="container">
  <div class="row mt-3">
    <div class="col-md-6">

      <div class="card">
        <div class="card-header">
          Form Ubah Data Barang
        </div>
        <div class="card-body">
          <form action="" method="POST">
            <input type="hidden" name="id" id="id" value="<?= $barang['id']; ?>">
            <div class="form-group">
              <label for="nama">Nama Barang</label>
              <input type="text" class="form-control" id="nama" name="namabarang" value="<?= $barang['nama_barang']; ?>">
            </div>
            <div class="form-group">
              <label for="harga">Harga</label>
              <input type="text" class="form-control" id="harga" name="harga" value="<?= $barang['harga']; ?>">
            </div>
            <button type="submit" nama="tambah" class="btn btn-primary float-right">Ubah Data</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>