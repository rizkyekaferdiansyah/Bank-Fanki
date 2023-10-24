<?php

include 'header.php';
require_once 'include/auth.php';
require 'include/function.php';

if (isset($_POST['datanasabahlunas'])) {
  if (tambahdatanasabahlunas($_POST) > 0) {
    echo "<script>
    alert('Tambah data berhasil');
    window.location.href='data-nasabah-lunas.php';
    </script>";
  } else {
    echo "<script>
    alert('Tambah data gagal');
    window.location.href='tambah-data-nasabah-lunas.php';
    </script>";
  }
}

?>

<main>
  <div class="container-fluid">
    <h1 class="mt-4">Data Nasabah Lunas</h1>
    <div class="card">
      <div class="card-header">Tambah Data
      </div>
      <div class="card-body">
        <form class="form-item" action="" method="post" role="form">
          <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama"  required="required">
          </div>
          <div class="form-group">
            <label for="nohp">Nomor HP</label>
            <input type="number" class="form-control" name="nohp"  required="required">
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" name="alamat"  required="required"></textarea>
          </div>
          <div class="form-group">
            <label for="norekening">Nomor Rekening</label>
            <input type="number" class="form-control" name="norekening"  required="required">
          </div>
          <div class="form-group row-cols-lg-5">
            <label for="pinjaman">Jumlah Pinjaman</label>
            <select name="pinjaman" id="" required="required" class="form-control">
              <option selected disabled>Pilih</option>
              <option value="5000000">5.000.000</option>
              <option value="10000000">10.000.000</option>
              <option value="15000000">15.000.000</option>
              <option value="20000000">20.000.000</option>
              <option value="25000000">25.000.000</option>
              <option value="30000000">30.000.000</option>
              <option value="35000000">35.000.000</option>
              <option value="40000000">40.000.000</option>
              <option value="45000000">45.000.000</option>
              <option value="50000000">50.000.000</option>
            </select>
            <!-- <input type="text" class="form-control" name="pinjaman" placeholder="Kawin/Belum Kawin/Cerai" required="required"> -->
          </div>
          <div class="form-group row-cols-lg-5">
            <label for="jangkawaktu">Jangka Waktu</label>
            <select name="jangkawaktu" id="" required="required" class="form-control">
              <option selected disabled>Pilih</option>
              <option value="12 Bulan">12 Bulan</option>
              <option value="24 Bulan">24 Bulan</option>
              <option value="36 Bulan">36 Bulan</option>
              <option value="48 Bulan">48 Bulan</option>
              <option value="60 Bulan">60 Bulan</option>
            </select>
            <!-- <input type="text" class="form-control" name="jangkawaktu" placeholder="3 Bulan" required="required"> -->
          </div>
          <div class="form-group row-cols-lg-5">
            <label for="status">Status</label>
            <select name="status" id="" required="required" class="form-control">
              <option selected disabled>Pilih</option>
              <option value="Lunas">Lunas</option>
              <option value="Belum Lunas">Belum Lunas</option>
            </select>
            <!-- <input type="text" class="form-control" name="status" placeholder="Lunas/Belum Lunas" required="required"> -->
          </div>
          <button type="submit" name="datanasabahlunas" class="btn btn-primary" onclick="return confirm('Yakin ingin menyimpan?')">Simpan</button>
          <button type="reset" class="btn btn-warning">Clear</button>
          <a href="data-nasabah-lunas.php" class="btn btn-success" onclick="return confirm('Yakin kembali?')">Kembali</a>
        </form>
      </div>
    </div>
  </div>
</main>

<?php

include 'footer.php';

?>
