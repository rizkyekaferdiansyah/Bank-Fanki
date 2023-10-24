<?php

include 'header.php';
require_once 'include/auth.php';
require "include/function.php";

$sql = mysqli_query($link, "SELECT * FROM peminjamperbulan ORDER BY pinjaman ASC");
if (isset($_POST['searchpeminjamperbulan'])) {
  $sql = caripeminjamperbulan($_POST['caripeminjamperbulan']);
}

?>

<main>
  <div class="container-fluid">
    <h1 class="mt-4">Data Peminjam Perbulan</h1>
    <div class="card mb-4">
      <div class="card-header">Tabel
        <form class="form-inline my-2 my-lg-0 float-right" method="post">
          <input class="form-control mr-sm-2" type="search" name="caripeminjamperbulan" placeholder="Cari">
          <button class="btn btn-outline-success mr-sm-2" type="submit" name="searchpeminjamperbulan">Cari</button>
          <a href="data-peminjam-perbulan.php" class="btn btn-danger mr-sm-2">Reset</a>
          <a href="tambah-data-peminjam-perbulan.php" class="btn btn-primary mr-sm-2">Tambah Data</a>
         <!-- <a href="printall-peminjam-perbulan.php" class="btn btn-success" target="_blank">Print Semua</a> -->
        </form>
      </div>
      <div class="card-body table-responsive">
        <table class="table table-sm table-hover table-bordered">
          <thead>
            <tr>
              <th>NO</th>
              <th>NIK</th>
              <th>Nama Peminjam</th>
              <th>Nomor HP</th>
              <th>Alamat</th>
              <th>Jenis Kelamin</th>
              <th>Status Kawin</th>
              <th>Nomor Rekening</th>
              <th>Pinjaman</th>
              <th>Angsuran</th>
              <th>Tanggal Pencairan</th>
              <th>Jangka Waktu</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; ?>
            <?php foreach ($sql as $row) : ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['nik']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['nohp']; ?></td>
                <td><?= substr($row['alamat'], 0, 255); ?></td>
                <td><?= $row['jeniskelamin'] ?></td>
                <td><?= $row['statuskawin'] ?></td>
                <td><?= $row['norekening']; ?></td>
                <td>Rp.<?= number_format($row['pinjaman'], 0, ',', '.'); ?></td>
                <td><?= $row['angsuran']; ?></td>
                <td><?= $row['tglpencairan']; ?></td>
                <td><?= $row['jangkawaktu']; ?></td>
                <td>
                  <div class="btn-group">
                    <a href="edit-data-peminjam-perbulan.php?id=<?= $row['id']; ?>" class="btn btn-warning">Edit</a>
                    <a href="hapus-data-peminjam-perbulan.php?id=<?= $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                    <a href="print-peminjam-perbulan.php?id=<?= $row['id']; ?>" class="btn btn-success" target="_blank">Print</a>
                  </div>
                </td>
              </tr>
              <?php $no++; ?>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>

  </div>
</main>

<?php

include 'footer.php';

?>
