<!DOCTYPE html>
<html>

<head>
    <title>Keranjang Belanja</title>
</head>

<body>
    <h2>Keranjang Belanja</h2>

    <?php
    // Ambil nilai dari cookie
    $beliNovel = $_COOKIE["beliNovel"];
    $beliBuku = $_COOKIE["beliBuku"];

    // Tampilkan jumlah barang yang dibeli
    echo "Jumlah Novel: " . $beliNovel . "<br>";
    echo "Jumlah Buku: " . $beliBuku;
    ?>
</body>

</html>