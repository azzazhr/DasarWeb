<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operasi Dua Bilangan</title>
</head>

<body>

    <h2>Operasi Dua Bilangan</h2>

    <form method="post" action="">
        Masukkan bilangan pertama: <input type="text" name="bilangan1" required><br>
        Masukkan bilangan kedua: <input type="text" name="bilangan2" required><br>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bilangan1 = $_POST['bilangan1'];
        $bilangan2 = $_POST['bilangan2'];

        if (is_numeric($bilangan1) && is_numeric($bilangan2)) {
            $penjumlahan = $bilangan1 + $bilangan2;
            $pengurangan = $bilangan1 - $bilangan2;
            $perkalian = $bilangan1 * $bilangan2;

            // Memastikan tidak membagi dengan nol
            if ($bilangan2 != 0) {
                $pembagian = $bilangan1 / $bilangan2;
            } else {
                $pembagian = "Tidak dapat membagi dengan nol.";
            }

            echo "<p>Hasil Penjumlahan: $penjumlahan</p>";
            echo "<p>Hasil Pengurangan: $pengurangan</p>";
            echo "<p>Hasil Perkalian: $perkalian</p>";
            echo "<p>Hasil Pembagian: $pembagian</p>";
        } else {
            echo "<p>Masukkan kedua bilangan dengan benar.</p>";
        }
    }
    ?>

</body>

</html>