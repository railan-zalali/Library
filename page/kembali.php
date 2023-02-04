<div class="container">
  <div class="row justify-content-center my-5 py-4">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Buku Yang Belum diKembalikan</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <!-- Tabel untuk menampilkan data -->
          <table class="table table-stripped table-bordered">
            <thead>
              <tr>
                <th>Nama Siswa</th>
                <th>Kelas</th>
                <th>Nama Buku</th>
                <th>Tanggal</th>
                <th>Jumlah Pinjam</th>
                <th>Jumlah Kembali</th>
                <th>Keterangan</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php $sql = "SELECT * FROM pinjaman WHERE keterangan = 'dikembalikan'";
              $result = mysqli_query($conn, $sql);
              $no=1;
              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  $tanggal = date("d-m-Y", strtotime($row["tanggal"]));
                  echo '<tr>
                  <td>'.$no++.'</td>
                  <td>'.$row["nama_siswa"].'</td>
                  <td>'.$row["kelas"].$row['abjad'].'</td>
                  <td>'.$row["nama_buku"].'</td>
                  <td>'.$tanggal.'</td>
                  <td>'.$row["jumlah_pinjam"].'</td>
                  <td>'.$row["jumlah_kembali"].'</td>
                  <td>'.$row["keterangan"].'</td>
                  <td>

                  <a href="index.php?page=ubah&data=kembali&id_pinjam='.$row["id_pinjam"].'" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                  <a href="proses/delete.php?data=kembali&id_pinjam='.$row["id_pinjam"].'" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                  </td>
                  </tr>';
                }
              } else {
                echo '<tr><td colspan="5">Tidak ada data</td></tr>';
              } 
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>




