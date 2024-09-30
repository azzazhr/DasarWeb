<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Luas Lingkaran</title>
</head>

<body>

    <h2>Hitung Luas Lingkaran</h2>

    <form method="post" action="">
        Masukkan jari-jari: <input type="text" name="jari_jari" required>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        define("PI", 3.14);

        $jari_jari = $_POST['jari_jari'];

        if (is_numeric($jari_jari) && $jari_jari > 0) {

            $luas_lingkaran = PI * $jari_jari * $jari_jari;

            echo "<p>Luas lingkaran dengan jari-jari $jari_jari adalah: $luas_lingkaran</p>";
        } else {
            echo "<p>Masukkan nilai jari-jari yang valid dan lebih besar dari nol.</p>";
        }
    }
    ?>

</body>

</html>