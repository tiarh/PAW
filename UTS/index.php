
<!DOCTYPE html>
<html>
<head>
	<title>TABLE 180</title>
</head>
<body>
		<h1>TABLE 180</h1>
		<a href="tambah.php" >Tambah</a>
		<table border="1">
    	<thead>
        <tr>
		<th>Id_180</th>
		<th>Nama_180</th>
		<th>Email_180</th>
        </tr>
   		</thead>
   		<tbody>

        <?php
		include "koneksi.php";
        $sql = "SELECT * FROM tbl_180 ";
        $query = mysqli_query($koneksi, $sql);

        while($data = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$data['id_180']."</td>";
            echo "<td>".$data['nama_180']."</td>";
            echo "<td>".$data['email_180']."</td>";

            echo "<td>";
            echo "<a href='edit.php?id=".$data['id_180']."'>Edit</a> | ";
            echo "<a href='delete.php?id=".$data['id_180']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>
				
</body>
</html>