<?php 
include '../proses/connection.php';
if (isset($_GET['id_pinjam'])) {
	if (isset($_GET['page']) && $_GET['page']=='details' && isset($_GET['data']) && $_GET['data']==='pinjam') {		
		$id_pinjam = mysqli_real_escape_string($conn, $_GET['id_pinjam']);
		$query = mysqli_query($conn, "DELETE FROM pinjaman WHERE id_pinjam = '$id_pinjam'");
		if ($query) {
			header("location: ../index.php?page=details&data=pinjam&message=berhasil_hapus");
		} else {
			header("location: ../index.php?page=details&data=pinjam&message=gagal_hapus");
		}
	} elseif (isset($_GET['page']) && $_GET['page']=='details' && isset($_GET['data']) && $_GET['data']==='kembali') {
		$id_pinjam = mysqli_real_escape_string($conn, $_GET['id_pinjam']);
		$query = mysqli_query($conn, "DELETE FROM pinjaman WHERE id_pinjam = '$id_pinjam'");
		if ($query) {
			header("location: ../index.php?page=details&data=kembali&message=berhasil_hapus");
		} else {
			header("location: ../index.php?page=details&data=kembali&message=gagal_hapus");
		}
	}
	mysqli_close($conn);
}

?>