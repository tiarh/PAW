<?php				
	include 'koneksi.php'; 
	$id = $_GET['id']; 

	$datas = mysqli_query($koneksi, "delete from tbl_180 where id_siswa ='$id'") or die(mysqli_error($koneksi));

	echo "<script>alert('data berhasil dihapus.');window.location='tbl_180.php';</script>";
?>