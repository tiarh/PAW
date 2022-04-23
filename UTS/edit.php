<?php
include('koneksi.php');
$id = $_GET['id']; 
$data = mysqli_query($koneksi, "SELECT * FROM tbl_180 WHERE id_180='$id'");
$row = mysqli_fetch_array($data);

?>
<!DOCTYPE html>
<html>

<head>
	<title>TABLE 180</title>
</head>

		<h1>Table 180</h1>
				<h2>Edit Data</h2>
				<form action="proses_edit.php" method="post" >
					<table width="25%" border="0">
					<tr> 
					<input type="hidden" name="id_180" value="<?= $row['id_180']; ?>">
					<td>Nama_180</td>
					<td><input type="text" name="nama_180" value="<?= $row['nama_180']; ?>"></td>
					</tr>
					<tr> 
					<td>email_180</td>
					<td><input type="text" name="email_180" value="<?= $row['email_180']; ?>"></td>
					</tr>
					<tr> 
					<tr> 
					<td></td>
					<td><input type="submit" name="Submit" value="update"></td>
					</tr>
					</table>
				</form>
				


</html>