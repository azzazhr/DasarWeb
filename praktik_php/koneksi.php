<?php
// Konfigurasi koneksi ke database
$host = "localhost"; // Nama host server MySQL
$user = "root"; // Username MySQL (biasanya "root" di server lokal)
$password = ""; // Password MySQL (kosong jika di server lokal default)
$database = "prakwebdb"; // Ganti dengan nama database yang Anda gunakan

// Membuat koneksi ke database MySQL
$connect = mysqli_connect($host, $user, $password, $database);

// Memeriksa apakah koneksi berhasil
if (!$connect) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
} else {
    // echo "Koneksi berhasil"; // Bisa diaktifkan untuk testing koneksi
}
