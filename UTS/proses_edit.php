<?php
include "koneksi.php";

$id = $_POST['id_180'];
$nama_180 = $_POST['nama_180'];
$email_180 = $_POST['email_180'];

$sql = "UPDATE tbl_180 SET nama_180='$nama_180', email_180='$email_180' WHERE id_180='$id'";
$query = mysqli_query($koneksi,  $sql) ;

if (!$query){
    echo "edit data  gagal";
}
else {
    echo "edit data berhasil";
    echo "<a href = 'index.php'> show data </a>";
}
				
?>