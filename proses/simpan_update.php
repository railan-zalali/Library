<?php 
include 'connection.php';

if (isset($_POST['submit'])) {

  $id_pinjam = mysqli_real_escape_string($conn, $_POST['id_pinjam']);
  $nama_siswa = mysqli_real_escape_string($conn, $_POST['nama_siswa']);
  $kelas = mysqli_real_escape_string($conn, $_POST['kelas']);
  $abjad = mysqli_real_escape_string($conn, $_POST['abjad']);
  $nama_buku = mysqli_real_escape_string($conn, $_POST['nama_buku']);
  $jumlah_pinjam = mysqli_real_escape_string($conn, $_POST['jumlah_pinjam']);

  if ($_GET['data'] === 'kembali') {
    $jumlah_kembali = mysqli_real_escape_string($conn, $_POST['jumlah_kembali']);
    $keterangan = "dikembalikan";

    $query = "UPDATE pinjaman SET jumlah_kembali = '$jumlah_kembali', keterangan = '$keterangan' WHERE id_pinjam = '$id_pinjam'";
    $result = mysqli_query($conn, $query);
    if ($result) {
      header("location: ../index.php?page=details&data=kembali&message=success");
    } else {
      header("location: ../index.php?page=details&data=kembali&message=error");
      echo "Error: " . mysqli_error($conn);
    }
  } elseif ($_GET['data'] === 'pinjam') {
    $keterangan = "dipinjam";

    $query = "UPDATE pinjaman SET nama_siswa = '$nama_siswa', kelas = '$kelas', abjad = '$abjad', nama_buku = '$nama_buku', jumlah_pinjam = '$jumlah_pinjam', keterangan = '$keterangan' 
    WHERE id_pinjam = '$id_pinjam'";
    $result = mysqli_query($conn, $query);
    if ($result) {
      header("location: ../index.php?page=details&data=pinjam&message=success");
    } else {
      header("location: ../index.php?page=details&data=pinjam&message=error");
      echo "Error: " . mysqli_error($conn);
    }
  }


  mysqli_close($conn);
}

?>
