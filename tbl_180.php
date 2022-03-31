<!DOCTYPE html>
<html>
<head>
	<title>TABLE SISWA</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<body>
	<div class="container col-md-6 mt-4">
		<h1>TABLE SISWA</h1>
		<div class="card">
			<div class="card-header bg-success text-white ">
				DATA SISWA <a href="tambah.php" class="btn btn-sm btn-primary float-right">Tambah</a>
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Id_siswa</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Asal_sekolah</th>
						</tr>
					</thead>
					<tbody>
						<?php
							include('koneksi.php'); 
							$query = mysqli_query($koneksi, "SELECT * FROM tbl_180") or die(mysqli_error($koneksi));

				

							while($data = mysqli_fetch_assoc($query)) {
						?>	

					<tr>
						<td><?= $data['id_siswa']; ?></td>
						<td><?= $data['nama'];  ?></td>
						<td><?= $data['alamat']; ?></td>
						<td><?= $data['asal_sekolah']; ?></td>
						<td>
								<a href="edit.php?id=<?= $data['id_siswa']; ?>" class="btn btn-sm btn-warning">Edit</a>
								<a href="delete.php?id=<?= $data['id_siswa']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('anda yakin ingin hapus?');">Hapus</a>
						</td>
					</tr>

						<?php  } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>