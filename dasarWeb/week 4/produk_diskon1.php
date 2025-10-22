<?php
echo "<br>";
$hargaProduk = 120000;
$diskon = 0.20;
$batasDiskon = 100000;

if ($hargaProduk > $batasDiskon) {
    $hargaAkhir = $hargaProduk - ($hargaProduk * $diskon);
} else {
    $hargaAkhir = $hargaProduk;
}

echo "Harga yang harus dibayar setelah diskon : Rp $hargaAkhir";
?>