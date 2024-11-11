<?php
include "koneksi.php"; // Memanggil file koneksi.php

// Mengambil data dari form
$username = $_POST['username'];
$password = $_POST['password']; // Mengenkripsi password menggunakan MD5

// Query untuk memeriksa keberadaan user
$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($connect, $query);
$cek = mysqli_num_rows($result);

// Mengecek apakah user ada
if ($cek > 0) {
    echo "Anda berhasil login. Silahkan menuju: ";
    echo "<a href='homeAdmin.html'>Halaman HOME</a>"; ?>
<?php
} else {
    echo "Anda gagal login. Silahkan ";
    echo "<a href='loginForm.html'>login kembali</a>"; ?>
<?php
    echo mysqli_error($connect);
}
?>