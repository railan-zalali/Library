<div class="container-fluid">
	<div class="row py-5 my-4">
		<div class="col">
			<div class="card">
				<div class="card-header">
					<h2 class="card-title text-bold">Laporan Buku Induk</h2>
				</div>
				<div class="card-body">
					<div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">		
						<table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
							<thead>
								<tr>
									<th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending">No</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Nomor Induk: activate to sort column ascending">Nomor Induk</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Judul Buku: activate to sort column ascending">Judul Buku</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Pengarang: activate to sort column ascending">Pengarang</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Penerbit: activate to sort column ascending">Penerbit</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Tempat Terbit: activate to sort column ascending">Tempat Terbit</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Asal Buku: activate to sort column ascending">Asal Buku</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Tanggal: activate to sort column ascending">Tanggal</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Tahun: activate to sort column ascending">Tahun</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								include 'proses/connection.php';
              						// Select data from the database
								if (isset($_GET['page'])=='pinjam') {
									$sql = "SELECT * FROM buku_induk ORDER BY tanggal_masuk DESC";
									$result = mysqli_query($conn, $sql);
								} 
								$no = 1;
								if (mysqli_num_rows($result) > 0) {
									while ($row = mysqli_fetch_assoc($result)) {
										$tanggal_masuk = date("d-m-Y", strtotime($row["tanggal_masuk"]));
										$tahun = date("d-m-Y", strtotime($row["tahun"]));
										echo '<tr class="odd">
										<td>'.$no++.'</td>
										<td>'.$row["nomor_induk"].'</td>
										<td>'.$row["judul_buku"].'</td>
										<td>'.$row["pengarang"].'</td>
										<td>'.$row["penerbit"].'</td>
										<td>'.$row["tempat_terbit"].'</td>
										<td>'.$row["asal_buku"].'</td>
										<td>'.$tanggal_masuk.'</td>
										<td>'.$tahun.'</td>
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
				</div>
			</div>
		</div>
	</div>
</div>