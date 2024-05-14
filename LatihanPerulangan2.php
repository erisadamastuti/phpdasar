<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Perulangan</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Angka</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $angka = array(12, 13, 15, 16, 67, 189, 346, 876, 54232, 3256);
            $nomor = 1;
            foreach ($angka as $value) {
                $keterangan = ($value % 2 == 0) ? 'Genap' : 'Ganjil';
                echo "
                <tr>
                    <td>$nomor</td>
                    <td>$value</td>
                    <td>$keterangan</td>
                </tr>
                ";
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>