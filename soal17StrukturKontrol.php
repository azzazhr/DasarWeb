<?php
$hargaAwal = 120000;
$diskon = 0.20;

if ($hargaAwal > 100000) {
    $hargaDiskon = $hargaAwal * $diskon;
    $hargaAkhir = $hargaAwal - $hargaDiskon;
} else {
    $hargaAkhir = $hargaAwal;
}

echo "Harga awal: Rp " . number_format($hargaAwal, 0, ',', '.') . "<br>";
echo "Harga bayar setelah diskon: Rp " . number_format($hargaAkhir, 0, ',', '.');
