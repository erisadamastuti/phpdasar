<!DOCTYPE html>
<html>
<body>

<h2>Konversi Angka ke Kata</h2>

<form action="" method="get">
    Masukkan Angka: <input type="number" name="angka" min="1" max="9">
    <input type="submit" value="Konversi">
</form>

<?php
if (isset($_GET['angka'])) {
    $angka = intval($_GET['angka']);

    switch ($angka) {
        case 1:
            $kata = "satu";
            break;
        case 2:
            $kata = "dua";
            break;
        case 3:
            $kata = "tiga";
            break;
        case 4:
            $kata = "empat";
            break;
        case 5:
            $kata = "lima";
            break;
        case 6:
            $kata = "enam";
            break;
        case 7:
            $kata = "tujuh";
            break;
        case 8:
            $kata = "delapan";
            break;
        case 9:
            $kata = "sembilan";
            break;
        default:
            $kata = "Angka tidak valid";
    }

    echo "<p>$angka dikonversi menjadi <strong>$kata</strong></p>";
}
?>

</body>
</html>