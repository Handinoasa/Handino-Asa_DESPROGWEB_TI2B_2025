<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa yang lulus: " . implode(', ', $nilaiLulus) . "<br><br>";

$karyawan = [
    ['nama' => 'Alice', 'pengalaman' => 5],
    ['nama' => 'Bob', 'pengalaman' => 2],
    ['nama' => 'Charlie', 'pengalaman' => 8],
    ['nama' => 'Diana', 'pengalaman' => 1],
];

$karyawanPengalamanLimaTahun = [];

foreach ($karyawan as $data) {
    if ($data['pengalaman'] > 5) {
        $karyawanPengalamanLimaTahun[] = $data['nama'];
    }
}

echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(', ', $karyawanPengalamanLimaTahun) . "<br><br>";

$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 80],
        ['Charlie', 85],
    ],
    'Kimia' => [
        ['Alice', 87],
        ['Bob', 95],
        ['Charlie', 80],
    ],
];

$mataKuliah = 'Fisika';

echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}
?>
