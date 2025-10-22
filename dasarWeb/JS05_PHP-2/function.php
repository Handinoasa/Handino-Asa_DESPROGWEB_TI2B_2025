<?php
//membuat fungsi
function perkenalan($nama, $Salam){
    echo "$Salam.";
    echo "Perkenalkan, nama saya ". $nama."<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}

//memanggil fungsi yang sudah dibuat
perkenalan("Hamdana","Halo");

echo "<hr>";

$saya = "Handino";
$ucapanSalam = "Selamat pagi";

//memanggil lagi
perkenalan($saya,$ucapanSalam);

?>