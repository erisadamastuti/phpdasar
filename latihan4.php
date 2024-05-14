<?php
/* Operator Logika yang bisa digunakan
* ==
Sama Dengan
$x == $y
*===
Identical
$x === $y
*!=
Tidak sama dengan
$x!= $y
*<
Tidak sama dengan
$x <> $y
*!==
Not identical
$x!== $y
* >
Lebih Besar dari
$x > $y
* <
Kurang Dari
$x < $y
* >=
Lebih besar atau Sama dengan
$x >= $y
*<=
Kurang dari atau sama dengan
Spaceship $x <=> $y
$x <= $y
* <=> 0*/

$t = date("H"); // mendapatkan jam dengan format 1-24

echo "If<br>";
if ($t < 16) {
    echo "Selamat siang!";
}

echo "<br>If dan Else<br>";
if ($t < 20) {
    echo "Selamat siang!";
} else {
    echo "Selamat malam!";
}

echo "<br>Nested If<br>";
if ($t < 12) {
    echo "Selamat Pagi!";
} elseif ($t < 16) {
    echo "Selamat siang!";
} else {
    echo "Selamat malam!";
}
?>