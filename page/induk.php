<div class="container-fluid">
  <div class="row justify-content-center my-5 py-4">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title text-bold">Data Buku Induk</h3>
        </div>
        <div class="card-body">
          <table class="table table-stripped table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>No Induk</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tempat terbit</th>
                <th>Asal Buku</th>
                <th>Tanggal</th>
                <th>Tahun</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php $sql = "SELECT * FROM buku_induk";
              $result = mysqli_query($conn, $sql);
              $no =1;
              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                 $tanggal = date("d-m-Y", strtotime($row["tanggal_masuk"]));
                 $tahun = date("d-m-Y", strtotime($row["tahun"]));
                 echo '<tr>
                 <td>'.$no++.'</td>
                 <td>'.$row["nomor_induk"].'</td>
                 <td>'.$row["judul_buku"].'</td>
                 <td>'.$row["pengarang"].'</td>
                 <td>'.$row["penerbit"].'</td>
                 <td>'.$row["tempat_terbit"].'</td>
                 <td>'.$row["asal_buku"].'</td>
                 <td>'.$tanggal.'</td>
                 <td>'.$row["tahun"].'</td>
                 <td>
                 <a href="proses/valid.php?page=ubah&id_buku_induk='.$row["id_buku_induk"].'" class="btn btn-primary btn-sm"><i class="fa fa-check"></i></a>
                 <a href="index.php?page=ubah&data=pinjam&id_buku_induk='.$row["id_buku_induk"].'" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                 <a href="proses/delete.php?id_buku_induk='.$row["id_buku_induk"].'&data=pinjam" class="btn btn-danger btn-sm my-1 ml-3"><i class="fa fa-trash"></i></a>
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