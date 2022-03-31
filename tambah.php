<!DOCTYPE html>
<html>

<head>
	<title>TABLE SISWA</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<body>
	<div class="container col-md-6 mt-4">
		<h1>DATA SISWA</h1>
		<div class="card">
			<div class="card-header bg-success text-white">
				Tambah Siswa
			</div>
			<div class="card-body">
				<form action="" method="post" role="form">
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="nama" required="" class="form-control">
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<input type="text" name="alamat" class="form-control">
					</div>

					<div class="form-group">
						<label>Asal Sekolah</label>
						<textarea class="form-control" name="asal_sekolah"></textarea>
					</div>

					<button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan data</button>
				</form>

				<?php
				include('koneksi.php');
				
			
				if (isset($_POST['submit'])) {
				
					$nama = $_POST['nama'];
					$alamat = $_POST['alamat'];
					$asal_sekolah = $_POST['asal_sekolah'];

					
					$query = mysqli_query($koneksi, "insert into tbl_180 (nama, alamat, asal_sekolah)values('$nama', '$alamat', '$asal_sekolah')") or die(mysqli_error($koneksi));
					
					echo "<script>alert('data berhasil disimpan.');window.location='tbl_180.php';</script>";
				}
				?>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>