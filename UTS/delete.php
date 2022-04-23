<?php				
	include 'koneksi.php'; 
	$id = $_GET['id']; 

	$datas = mysqli_query($koneksi, "delete from tbl_180 where id_180 ='$id'") ;
	
	if (!$datas){
		echo "<a> delete data gagal </a>";
	}
	else{
	echo "<a> delete data berhasil</a>";
	echo "<a href = 'index.php'> show data</a>";
	}
?>