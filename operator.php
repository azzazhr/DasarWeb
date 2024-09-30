<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Penjumlahan: {$hasilTambah} <br>";
echo "Hasil Pengurangan: {$hasilKurang} <br>";
echo "Hasil Perkalian: {$hasilKali} <br>";
echo "Hasil Pembagian: {$hasilBagi} <br>";
echo "Sisa Bagi: {$sisaBagi} <br>";
echo "Hasil Pangkat: {$pangkat} <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Apakah a sama dengan b? " . ($hasilSama ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah a tidak sama dengan b? " . ($hasilTidakSama ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah a lebih kecil dari b? " . ($hasilLebihKecil ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah a lebih besar dari b? " . ($hasilLebihBesar ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah a lebih kecil atau sama dengan b? " . ($hasilLebihKecilSama ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah a lebih besar atau sama dengan b? " . ($hasilLebihBesarSama ? 'Ya' : 'Tidak') . "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil AND (a dan b): " . ($hasilAnd ? 'True' : 'False') . "<br>";
echo "Hasil OR (a atau b): " . ($hasilOr ? 'True' : 'False') . "<br>";
echo "Hasil NOT a: " . ($hasilNotA ? 'True' : 'False') . "<br>";
echo "Hasil NOT b: " . ($hasilNotB ? 'True' : 'False') . "<br>";

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

echo "Hasil setelah penjumlahan (a += b): {$a} <br>";
echo "Hasil setelah pengurangan (a -= b): {$a} <br>";
echo "Hasil setelah perkalian (a *= b): {$a} <br>";
echo "Hasil setelah pembagian (a /= b): {$a} <br>";
echo "Hasil setelah sisa bagi (a %= b): {$a} <br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Apakah a identik dengan b? " . ($hasilIdentik ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah a tidak identik dengan b? " . ($hasilTidakIdentik ? 'Ya' : 'Tidak') . "<br>";
