<!DOCTYPE html>
<html>

<head>
	<title>TABLE SISWA</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<body>
	<div class="container col-md-6 mt-4">
		<h1>Table Siswa</h1>
		<div class="card">
			<div class="card-header bg-success text-white ">
				Edit Data
			</div>
			<div class="card-body">
				<?php
				include('koneksi.php');

				$id = $_GET['id']; 

				$data = mysqli_query($koneksi, "SELECT * FROM tbl_180 WHERE id_siswa='$id'");
				$row = mysqli_fetch_assoc($data);

				?>
				<form action="" method="post" role="form">
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="nama" required="nama" class="form-control" value="<?= $row['nama']; ?>">
						<input type="hidden" name="id_siswa" required="id_siswa" value="<?= $row['id_siswa']; ?>">
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<input type="text" name="alamat" class="form-control" value="<?= $row['alamat']; ?>">
					</div>

					<div class="form-group">
						<label>Asal Sekolah</label>
						<textarea class="form-control" name="asal_sekolah"><?= $row['asal_sekolah']; ?></textarea>
					</div>
					<button type="submit" class="btn btn-primary" name="submit" value="simpan">update data</button>
				</form>

				<?php

			
				if (isset($_POST['submit'])) {
					$id = $_POST['id_siswa'];
					$nama = $_POST['nama'];
					$alamat = $_POST['alamat'];
					$asal_sekolah = $_POST['asal_sekolah'];

					mysqli_query($koneksi,  "UPDATE tbl_180 SET nama='$nama', 
					alamat='$alamat', asal_sekolah='$asal_sekolah' WHERE id_siswa='$id'") or die(mysqli_error($koneksi));

					echo "<script>alert('data berhasil diupdate.');window.location='tbl_180.php';</script>";
				}



				?>
			</div>
		</div>
	</div>


	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>