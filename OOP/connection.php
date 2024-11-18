<?php

$host = "ASUS"; // Ganti dengan nama server Anda

// 2. Buat array untuk menyimpan informasi koneksi (nama database, username, password)
$connInfo = array(
    "Database" => "", // Ganti dengan nama database Anda
    "UID" => "", // Ganti dengan username Anda
    "PWD" => "" // Ganti dengan password Anda
);

// 3. Buat koneksi ke database menggunakan fungsi sqlsrv_connect
//$conn = sqlsrv_connect($host, $connInfo);

// 4. Periksa apakah koneksi berhasil
if ($conn) {
    echo "Koneksi berhasil.<br />";
} else {
    echo "Koneksi gagal.<br />";
    //die(print_r(sqlsrv_errors(), true)); // Tampilkan pesan error jika koneksi gagal
}
