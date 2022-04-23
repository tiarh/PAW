<?php
include('koneksi.php');	

$nama_180 = $_POST['nama_180'];
$email_180 = $_POST['email_180'];

$sql = "insert into tbl_180 values(null, '$nama_180', '$email_180')";
$query = mysqli_query($koneksi, $sql);
if (!$query){
    echo " tambah data gagal";
}
else {
        echo "tambah data berhasil";
        echo "<a href= 'index.php'> show data </a>";
}
				
?>