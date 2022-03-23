<?php
require_once "class_persegipanjang.php";
$persegipanjang1 = new persegipanjang(18,7);
$persegipanjang2 = new persegipanjang(8,5);

echo "<br/>Persegi Panjang 1 Memiliki Nilai Panjang = 18 , Lebar = 7 ";
echo "<br/>Persegi Panjang 2 Memiliki Nilai Panjang = 4 , Lebar = 3 ";

echo "<br/>Luas Persegi Panjang 1 = ".$persegipanjang1->getluas();
echo "<br/>Luas Persegi Panjang 2 = ".$persegipanjang2->getluas();

echo "<br/>Keliling Persegi Panjang 1 = ".$persegipanjang1->getkeliling();
echo "<br/>Keliling Persegi Panjang 2 = ".$persegipanjang2->getkeliling();

?>