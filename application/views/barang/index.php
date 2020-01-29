<div class="container">
  <h2>Data Barang</h2>
  <div class="row mt-3">
    <div class="col-md-6">
      <a href="<?= base_url('barang/tambah'); ?>" class="btn btn-primary">Tambah Data Kerusakan</a>
    </div>
  </div>
  <table class="table table-bordered mt-3">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Harga</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($barang as $brg) : ?>
        <?php $i = 1; ?>
        <tr>
          <td><?php $i; ?></td>
          <td><?= $brg['nama_barang']; ?></td>
          <td><?= $brg['harga']; ?></td>
          <td>
            <a href="<?= base_url(); ?>/barang/ubah/<?= $brg['id']; ?>" class="btn btn-success">Ubah</a>
            <a href="<?= base_url(); ?>/barang/hapus/<?= $brg['id']; ?>" class="btn btn-danger">Hapus</a>
          </td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>