<?php
//membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan($nama, $Salam="Assalamualaikum"){
    echo $Salam.",";
    echo "Perkenalkan, nama saya ". $nama."<br/>";

    //memanggil fungsi lain
    echo "Umur saya adalah ". hitungUmur(2004, 2025). " tahun<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}

//memanggil fungso perkenalan
perkenalan("Handino"); 