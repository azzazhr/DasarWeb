<?php

$daftarSiswa = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90]
];

$totalNilai = 0;
$jumlahSiswa = count($daftarSiswa);

foreach ($daftarSiswa as $siswa) {
    $totalNilai += $siswa[1];
}

$nilaiRataRata = $totalNilai / $jumlahSiswa;

echo "Rata-rata nilai kelas: " . number_format($nilaiRataRata, 2) . "<br>";
echo "Daftar siswa dengan nilai di atas rata-rata:<br>";

foreach ($daftarSiswa as $siswa) {
    if ($siswa[1] > $nilaiRataRata) {
        echo "Nama: {$siswa[0]}, Nilai: {$siswa[1]}<br>";
    }
}
