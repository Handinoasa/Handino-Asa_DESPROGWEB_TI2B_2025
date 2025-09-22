<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "=== Operator Perhitungan === <br>";
echo "nilai a: {$a} <br>";
echo "nilai b: {$b} <br><br>";

echo "Hasil Tambah (a + b) = {$hasilTambah} <br>";
echo "Hasil Kurang (a - b) = {$hasilKurang} <br>";
echo "Hasil Kali (a * b) = {$hasilKali} <br>";
echo "Hasil Bagi (a / b) = {$hasilBagi} <br>";
echo "Sisa Bagi (a % b) = {$sisaBagi} <br>";
echo "Pangkat (a ** b) = {$pangkat} <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "<br>";
echo "=== Operator Perbandingan === <br>";
echo "a == b : "; var_dump($hasilSama); echo "<br>";
echo "a != b : "; var_dump($hasilTidakSama); echo "<br>";
echo "a < b : "; var_dump($hasilLebihKecil); echo "<br>";
echo "a > b : "; var_dump($hasilLebihBesar); echo "<br>";
echo "a <= b : "; var_dump($hasilLebihKecilSama); echo "<br>";
echo "a >= b : "; var_dump($hasilLebihBesarSama); echo "<br><br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;   
$hasilNotB = !$b;

echo "=== Operator Logika === <br>";
echo "(a == 10) && (b == 5)   : "; var_dump($hasilAnd); echo "<br>";
echo "(a == 10) || (b == 10)  : "; var_dump($hasilOr); echo "<br>";
echo "!(a == 10)              : "; var_dump($hasilNotA); echo "<br>";
echo "!(b == 10)              : "; var_dump($hasilNotB); echo "<br><br>";

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

$c = $a;
$c += $b; echo "c += b : {$c} <br>";

$c = $a;
$c -= $b; echo "c -= b : {$c} <br>";

$c = $a;
$c *= $b; echo "c *= b : {$c} <br>";

$c = $a;
$c /= $b; echo "c /= b : {$c} <br>";

$c = $a;
$c %= $b; echo "c %= b : {$c} <br><br>";


$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "=== Operator Identitas === <br>";
var_dump($a === $b); echo " (a === b) [sama nilai & tipe data]<br>";
var_dump($a !== $b); echo " (a !== b) [tidak identik]<br><br>";
?>
