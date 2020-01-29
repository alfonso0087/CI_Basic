<div class="container">
  <div class="row mt-3">
    <div class="col-md-6">

      <div class="card">
        <div class="card-header">
          Form Tambah Data Barang
        </div>
        <div class="card-body">
          <form action="" method="POST">
            <input type="hidden" name="id" id="id">
            <div class="form-group">
              <label for="nama">Nama Barang</label>
              <input type="text" class="form-control" id="nama" name="namabarang">
              <small class="form-text text-danger"> <?= form_error('namabarang'); ?></small>
            </div>
            <div class="form-group">
              <label for="harga">Harga</label>
              <input type="text" class="form-control" id="harga" name="harga">
              <small class="form-text text-danger"> <?= form_error('harga'); ?></small>
            </div>
            <!-- <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" class="form-control" id="gambar" name="gambar">
          </div> -->
            <button type="submit" nama="tambah" class="btn btn-primary float-right">Tambah Data</button>
          </form>
        </div>
      </div>





    </div>
  </div>
</div>