<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilaiSiswa);

$nilaiTerendah = array_slice($nilaiSiswa, 0, 2);
$nilaiTertinggi = array_slice($nilaiSiswa, -2);

$totalNilai = array_sum($nilaiSiswa) - array_sum($nilaiTerendah) - array_sum($nilaiTertinggi);

echo "Total nilai yang digunakan untuk menghitung rata-rata setelah mengabaikan dua nilai tertinggi dan dua nilai terendah adalah: $totalNilai<br>";

$rataRata = $totalNilai / (count($nilaiSiswa) - 4);
echo "Rata-rata nilai siswa setelah pengabaian adalah: $rataRata";
