<?php 
$server   ="localhost";
$username ="root";
$password ="";
$database ="db_tiar";

$koneksi = mysqli_connect($server, $username, $password, $database);

if (!$koneksi) {
	echo "Koneksi database Gagal ";
}
 ?>  