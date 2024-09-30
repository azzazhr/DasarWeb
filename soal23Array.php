<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pendaftaran Kursus Online</title>
</head>

<body>

    <h2>Sistem Pendaftaran Kursus Online</h2>

    <?php
    $siswa = [
        [
            "nama" => "Andi",
            "kursus" => ["Matematika", "Fisika"]
        ],
        [
            "nama" => "Budi",
            "kursus" => ["Biologi"]
        ],
        [
            "nama" => "Cindy",
            "kursus" => ["Kimia", "Matematika"]
        ]
    ];

    function tampilkanDaftarSiswa($siswa)
    {
        echo "<h3>Daftar Siswa dan Kursus yang Diambil</h3>";
        if (empty($siswa)) {
            echo "<p>Tidak ada siswa terdaftar.</p>";
            return;
        }

        foreach ($siswa as $data) {
            $nama = $data["nama"];
            $kursus = implode(", ", $data["kursus"]);
            echo "<p><strong>Nama:</strong> $nama | <strong>Kursus:</strong> $kursus</p>";
        }
    }

    function tambahSiswa(&$siswa, $nama, $kursusBaru)
    {

        foreach ($siswa as &$data) {
            if ($data["nama"] === $nama) {

                $data["kursus"][] = $kursusBaru;
                return;
            }
        }

        $siswa[] = ["nama" => $nama, "kursus" => [$kursusBaru]];
    }

    tampilkanDaftarSiswa($siswa);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $namaSiswa = $_POST['nama_siswa'];
        $kursusSiswa = $_POST['kursus_siswa'];
        tambahSiswa($siswa, $namaSiswa, $kursusSiswa);
        echo "<p>Siswa baru ditambahkan: <strong>$namaSiswa</strong> dengan kursus <strong>$kursusSiswa</strong>.</p>";
    }
    ?>

    <h3>Tambahkan Siswa dan Kursus</h3>
    <form method="post" action="">
        Nama Siswa: <input type="text" name="nama_siswa" required><br>
        Kursus yang Diambil: <input type="text" name="kursus_siswa" required><br>
        <input type="submit" value="Tambahkan">
    </form>

    <?php
    tampilkanDaftarSiswa($siswa);
    ?>

</body>

</html>