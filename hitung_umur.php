<?php
// Tahun Lahir
$tahunLahir = 2001;

// Tahun sekarang
$tahunSekarang = date("Y");

// Menghitung umur dalam abad
$umur = ($tahunSekarang - $tahunLahir) / 100;

// Menampilkan hasil
echo "Umur saya tahun ini adalah: $umur abad.";
?>
