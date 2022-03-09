<?php
// membuat fungsi
function menghitungUmur($tahun_lahir, $tahun_sekarang){
  $umur = $tahun_sekarang - $tahun_lahir;
  return $umur;
}

echo "Umur saya adalah ". menghitungUmur(1994, 2015) ." tahun";
echo "Umur saya adalah ". menghitungUmur(1990, 2015) ." tahun";
echo "Umur saya adalah ". menghitungUmur(1998, 2015) ." tahun";
?>