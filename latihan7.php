<?php
$namaBuah = array("Nanas", "Mangga", "Jeruk", "Apel", "Melon", "Manggis");

echo "Saya suka ". $namaBuah[0]. ", ". $namaBuah[1]. " dan ". $namaBuah[2]. ".<br>";

// Tampilkan Mangga
echo "Saya suka ". $namaBuah[1]. ".<br>";

// Tampilkan Jeruk
echo "Saya suka ". $namaBuah[2]. ".<br>";

// Tampilkan Apel
echo "Saya suka ". $namaBuah[3]. ".<br>";

// Tampilkan Melon
echo "Saya suka ". $namaBuah[4]. ".<br>";

// Array dengan spesifik index
$umur = array("Andi"=>"35 Tahun", "Ben"=>"37 Tahun", "Joe"=>"Tahun");
$umur['ahmad']="50 Tahun";

echo "Umur Andi adalah ". $umur['Andi']. ".<br>";

// Tampilkan semua umur
foreach ($umur as $nama => $tahun) {
    echo "Umur $nama adalah $tahun.<br>";
}
?>