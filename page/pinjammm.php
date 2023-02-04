<div class="container">
  <div class="row justify-content-center my-5 py-4">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">DataTable with default features</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-stripped table-bordered">
            <thead class="thead-dark">
              <tr>
                <th>Nama Siswa</th>
                <th>Kelas</th>
                <th>Nama Buku</th>
                <th>Tanggal</th>
                <th>Jumlah Pinjam</th>
                <th>Jumlah Kembali</th>
                <th>Keterangan</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              include 'proses/connection.php';
              // Select data from the database

              $sql = "SELECT * FROM pinjaman";
              $result = mysqli_query($conn, $sql);

              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo '<tr>
                  <td>'.$row["id_pinjam"].'</td>
                  <td>'.$row["nama_siswa"].'</td>
                  <td>'.$row["kelas"].'</td>
                  <td>'.$row["nama_buku"].'</td>
                  <td>'.$row["jumlah_pinjam"].'</td>
                  <td>'.$row["jumlah_kembali"].'</td>
                  <td>'.$row["keterangan"].'</td>
                  <td>
                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal" data-id-pinjam="'.$row["id_pinjam"].'" data-nama-siswa="'.$row["nama_siswa"].'" data-kelas="'.$row["kelas"].'" data-nama-buku="'.$row["nama_buku"].'" data-jumlah-pinjam="'.$row["jumlah_pinjam"].'" data-jumlah-kembali="'.$row["jumlah_kembali"].'" data-keterangan="'.$row["keterangan"].'">Edit</button>
                  <a href="delete.php?id_pinjam='.$row["id_pinjam"].'" class="btn btn-danger">Delete</a>
                  </td>
                  </tr>';
                }
              } else {
                echo '<tr><td colspan="5">Tidak ada data</td></tr>';
              }

              mysqli_close($conn);
              ?>

          </tbody>
        </table>

      </div>
      <!-- /.card-body -->
    </div>
  </div>
</div>
</div>

<!-- halaman HTML -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Buka Modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Form Edit Data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <form action="proses/update.php" method="post">
          <input type="hidden" name="id_pinjam" id="id_pinjam">
          <div class="form-group">
            <label for="nama_siswa">Nama Siswa</label>
            <input type="nama_siswa" class="form-control" id="nama_siswa" name="nama_siswa" required>
          </div>
          <div class="form-group">
            <label for="kelas">Kelas</label>
            <input type="text" class="form-control" id="kelas" name="kelas" required>
          </div>
          <div class="form-group">
            <label for="nama_buku">Nama Buku</label>
            <input class="form-control" id="nama_buku" name="nama_buku" required>
          </div>
          <div class="form-group">
            <label for="jumlah_pinjam">Jumlah Pinjam</label>
            <input class="form-control" id="jumlah_pinjam" name="jumlah_pinjam" required>
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

