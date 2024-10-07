<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tabel Dosen</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
            font-family: Arial, sans-serif;
            font-size: 18px;
            text-align: left;
        }

        th,
        td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: gray;
            font-weight: bold;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>

<body>

    <h2>Informasi Dosen</h2>

    <?php
    $Dosen = [
        'Nama' => 'Elok Nur Hamdana',
        'Domisili' => 'Malang',
        'Jenis Kelamin' => 'Perempuan'
    ];
    ?>

    <table>
        <tr>
            <th>Informasi</th>
            <th>Detail</th>
        </tr>
        <?php
        foreach ($Dosen as $key => $value) {
            echo "<tr><td>$key</td><td>$value</td></tr>";
        }
        ?>
    </table>

</body>

</html>