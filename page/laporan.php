<div class="container">
	<div class="row py-5 my-4">
		<div class="col">
			<div class="card">
				<div class="card-header">
					<h2 class="card-title text-bold">Laporan Buku</h2>
				</div>
				<div class="card-body">
					<div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">		
						<table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
							<thead>
								<tr>
									<th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Nama Siswa: activate to sort column descending">Nama Siswa</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Kelas: activate to sort column ascending">Kelas</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Nama Buku: activate to sort column ascending">Nama Buku</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Jumlah Pinjam: activate to sort column ascending">Jumlah Pinjam</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Jumlah Kembali: activate to sort column ascending">Jumlah Kembali</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Tanggal: activate to sort column ascending">Tanggal</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Keterangan: activate to sort column ascending">Keterangan</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								include 'proses/connection.php';
              						// Select data from the database
								if (isset($_GET['page'])=='pinjam') {
									$sql = "SELECT * FROM pinjaman ORDER BY tanggal DESC";
									$result = mysqli_query($conn, $sql);
								} 

								if (mysqli_num_rows($result) > 0) {
									while ($row = mysqli_fetch_assoc($result)) {
										$tanggal = date("d-m-Y", strtotime($row["tanggal"]));
										echo '<tr class="odd">
										<td>'.$row["nama_siswa"].'</td>
										<td>'.$row["kelas"].'</td>
										<td>'.$row["nama_buku"].'</td>
										<td>'.$row["jumlah_pinjam"].'</td>
										<td>'.$row["jumlah_kembali"].'</td>
										<td>'.$tanggal.'</td>
										<td>'.$row["keterangan"].'</td>
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