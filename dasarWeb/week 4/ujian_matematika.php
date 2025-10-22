<?php
echo"<br>";
$nilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilai);
$nilaiTengah = array_slice($nilai, 2, count($nilai) - 4);
$total = array_sum($nilaiTengah);
$rataRata = $total / count($nilaiTengah);

echo "Total nilai setelah mengabaikan nilai tertinggi & terendah : $total <br>";
echo "Rata-rata nilai : $rataRata";
?>