<?php 
include 'proses/connection.php';
if (isset($_GET['page'])) {
  $id_pinjam = $_GET['id_pinjam'];
  $query = mysqli_query($conn, "SELECT * FROM pinjaman WHERE id_pinjam = '$id_pinjam'");
  while ($row = mysqli_fetch_array($query)) {
    // $id_pinjam = $row['id_pinjam'];
    $tanggal = $row['tanggal'];
    $nama_siswa = $row['nama_siswa'];
    $kelas = $row['kelas'];
    $abjad = $row['abjad'];
    $nama_buku = $row['nama_buku'];
    $jumlah_pinjam = $row['jumlah_pinjam'];
    $nama_siswa = $row['nama_siswa'];
    $keterangan = $row['keterangan'];

  }

}
?>
<div class="container my-5 py-5">
  <div class="row justify-content-center">
    <div class="col-8">
      <h1 class="text-center">Input Data Peminjam</h1>
      <div class="card">
        <div class="card-body">
          <?php if (isset($_GET['data']) && $_GET['data']=='kembali') { 
            $readonly = 'readonly';
            ?>
            <form action="proses/simpan_update.php?data=kembali" method="post">
            <?php } elseif (isset($_GET['page']) && $_GET['page']=='ubah' && isset($_GET['data']) && $_GET['data']=='pinjam') { 
              $readonly = '';

              ?>
              <form action="proses/simpan_update.php?data=pinjam" method="post">


              <?php } ?>
              <div class="container">
                <div class="row">
                  <div class="col">
                    <input type="hidden" class="form-control" name="id_pinjam" id="id_pinjam" value="<?php echo $id_pinjam; ?>">
                    <div class="mb-3">
                      <label for="nama_siswa" class="form-label">Nama Siswa</label>
                      <input type="text" class="form-control" name="nama_siswa" id="nama_siswa" value="<?php echo $nama_siswa; ?>" required <?php echo $readonly; ?>>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <?php if (isset($_GET['data']) && $_GET['data']=='kembali') { ?>
                    <div class="col">
                      <label for="kelas" class="form-label">Kelas</label>
                      <select class="form-select" aria-label="Default select example" name="kelas" id="kelas" disabled>
                        <option selected> <?php echo $kelas; ?></option>
                        
                      </select>
                    </div>
                    <div class="col">
                      <label for="kelas" class="form-label">-</label>
                      <select class="form-select" aria-label="Default select example" name="abjad" id="abjad" disabled>
                        <option selected>  <?php echo $abjad; ?> </option>
                        
                      </select>
                    </div>
                  <?php } elseif (isset($_GET['page']) && $_GET['page']=='ubah' && isset($_GET['data']) && $_GET['data']=='pinjam') { ?>
                    <div class="col">
                      <label for="kelas" class="form-label">Kelas</label>
                      <select class="form-select" aria-label="Default select example" name="kelas" id="kelas">
                        <option selected> <?php echo $kelas; ?></option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                      </select>
                    </div>
                    <div class="col">
                      <label for="kelas" class="form-label">-</label>
                      <select class="form-select" aria-label="Default select example" name="abjad" id="abjad">
                        <option selected>  <?php echo $abjad; ?> </option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                      </select>
                    </div>
                  <?php } ?>
                  <div class="col">
                    <div class="mb-3">
                      <label for="tanggal" class="form-label">Tanggal</label>
                      <?php if (isset($_GET['data']) && $_GET['data']=='kembali') { ?>
                        <input type="text" class="form-control" name="tanggal" id="tanggal" value="<?php echo $tanggal; ?>" required <?php echo $readonly; ?>>
                      <?php } elseif (isset($_GET['page']) && $_GET['page']=='ubah' && isset($_GET['data']) && $_GET['data']=='pinjam') { ?>
                        <input type="text" class="form-control" name="tanggal" id="tanggal" value="<?php echo $tanggal; ?>" required disabled>
                      <?php } ?>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <label for="nama_buku" class="form-label">Nama Buku</label>
                    <input type="text" class="form-control" name="nama_buku" id="nama_buku" value="<?php echo $nama_buku ?>" required <?php echo $readonly; ?>>
                  </div>
                  <div class="col">
                    <div class="mb-3">
                      <label for="jumlah_pinjam" class="form-label">Jumlah Pinjam</label>
                      <input type="number" class="form-control" name="jumlah_pinjam" id="jumlah_pinjam" value="<?php echo $jumlah_pinjam ?>" required <?php echo $readonly; ?>>
                    </div>
                  </div>
                  <?php if (isset($_GET['data']) && $_GET['data']=='kembali') { ?>
                    <div class="col">
                      <div class="mb-3">
                        <label for="jumlah_kembali" class="form-label">Jumlah Kembali</label>
                        <input type="number" class="form-control" name="jumlah_kembali" id="jumlah_kembali" required autofocus>
                      </div>
                    </div>
                  <?php } elseif (isset($_GET['page']) && $_GET['page']=='ubah' && isset($_GET['data']) && $_GET['data']=='pinjam') { ?>

                  <?php } ?>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="mb-3">
                      <label for="jumlah_kembali" class="form-label">Keterangan</label>
                      <input type="text" class="form-control" name="keterangan" id="keterangan" value="<?php echo $keterangan ?>" required readonly>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="mb-3">
                      <input type="submit" class="btn btn-primary" name="submit" id="submit">
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
