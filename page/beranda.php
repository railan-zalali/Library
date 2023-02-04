<?php 
include 'proses/connection.php';
$query = mysqli_query($conn, "SELECT * FROM pinjaman WHERE keterangan = 'dipinjam'");
$jumlah_column = mysqli_num_rows($query);

$query1 = mysqli_query($conn, "SELECT * FROM pinjaman WHERE keterangan = 'dikembalikan'");
$jumlah_column1 = mysqli_num_rows($query1);

$query2 = mysqli_query($conn, "SELECT * FROM pinjaman");
$jumlah_column2 = mysqli_num_rows($query2);
?>
<div class="container my-5 py-5">
  <div class="row justify-content-center">
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow">
        <span class="info-box-icon bg-success"><i class="far fa-copy"></i></span>

        <div class="info-box-content">
          <a href="index.php?page=pinjam" class="text-decoration-none" style="color: black;">
            <span class="info-box-text">Buku Yang Dipinjam</span>
            <span class="info-box-number"><?php echo $jumlah_column; ?></span>
          </a>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-4 col-sm-8 col-12">
      <div class="info-box shadow">
        <span class="info-box-icon bg-primary"><i class="far fa-copy"></i></span>

        <div class="info-box-content">
          <a href="index.php?page=kembali" class="text-decoration-none" style="color: black;">

            <span class="info-box-text">Buku Yang Sudah Dikembalikan</span>
            <span class="info-box-number"><?php echo $jumlah_column1; ?></span>
          </a>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow">
        <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>
        <a href="index.php?page=laporan" class="text-decoration-none" style="color: black;">
          <div class="info-box-content">
            <span class="info-box-text">Laporan</span>
            <span class="info-box-number">Jumlah Data <?php echo $jumlah_column2; ?></span>
          </div>
        </a>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- /.col -->
  </div>
</div>