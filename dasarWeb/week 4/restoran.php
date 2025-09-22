<?php
$totalKursi = 45;
$kursiTerpakai = 28;
$kursiKosong = $totalKursi - $kursiTerpakai;
$persenKosong = ($kursiKosong / $totalKursi) * 100;

echo "Total kursi : {$totalKursi} <br>";
echo "Kursi terpakai : {$kursiTerpakai} <br>";
echo "Kursi kosong : {$kursiKosong} <br>";
echo "Presentase kursi kosong {$persenKosong}% <br>";
?>
