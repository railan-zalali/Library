<?php 
include '../proses/connection.php';
if (isset($_GET['id_pinjam'])) {
	$id_pinjam = mysqli_real_escape_string($conn, $_GET['id_pinjam']);
	$keterangan = "dikembalikan";
	$query = "UPDATE pinjaman SET keterangan = '$keterangan' WHERE id_pinjam = '$id_pinjam'";
	$result = mysqli_query($conn, $query);
	if ($result) {
		header("location: ../index.php?page=details&data=pinjam&message=success");
	} else {
		header("location: ../index.php?page=details&data=pinjam&message=error");
		echo "Error: " . mysqli_error($conn);
	}

	mysqli_close($conn);
}

?>