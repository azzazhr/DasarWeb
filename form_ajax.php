<!DOCTYPE html>
<html>

<head>
    <title>Contoh Form dengan PHP dan jQuery</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
</head>

<body>
    <h2>Form Contoh</h2>
    <?php
    // Cek apakah metode permintaan adalah POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil data dari formulir
        $buah = htmlspecialchars($_POST['buah'], ENT_QUOTES, 'UTF-8');
        $warna = isset($_POST['warna']) ? implode(", ", $_POST['warna']) : "tidak ada warna yang dipilih";
        $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin'], ENT_QUOTES, 'UTF-8');

        // Tampilkan hasil
        echo "Hasil yang Anda pilih:<br>";
        echo "Buah: " . $buah . "<br>";
        echo "Warna Favorit: " . $warna . "<br>";
        echo "Jenis Kelamin: " . $jenis_kelamin;
    } else {
        echo "Tidak ada data yang dikirim.";
    }
    ?>

    <form id="myForm">
        <label for="buah">Pilih Buah:</label>
        <select name="buah" id="buah">
            <option value="apel">Apel</option>
            <option value="pisang">Pisang</option>
            <option value="mangga">Mangga</option>
            <option value="jeruk">Jeruk</option>
        </select>
        <br>

        <label>Pilih Warna Favorit:</label><br>
        <input type="checkbox" name="warna[]" value="merah"> Merah<br>
        <input type="checkbox" name="warna[]" value="biru"> Biru<br>
        <input type="checkbox" name="warna[]" value="hijau"> Hijau<br>
        <br>

        <label>Pilih Jenis Kelamin:</label><br>
        <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki<br>
        <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan<br>
        <br>

        <input type="submit" value="Submit">
    </form>

    <div id="hasil">Hasil akan ditampilkan di sini</div>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(e) {
                e.preventDefault(); // Mencegah pengiriman formulir default

                var formData = $(this).serialize(); // Serialize data dari formulir

                $.ajax({
                    url: "proses_data.php", // URL untuk mengirim data
                    type: "POST", // Metode pengiriman
                    data: formData, // Data yang akan dikirim
                    success: function(response) {
                        $("#hasil").html(response); // Tampilkan respons di div hasil
                    },
                    error: function() {
                        $("#hasil").html("Terjadi kesalahan saat mengirim data."); // Tampilkan pesan kesalahan
                    }
                });
            });
        });
    </script>
</body>

</html>