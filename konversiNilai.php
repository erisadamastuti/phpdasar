<?php
function konversiNilai($nilaiAngka) {
  if ($nilaiAngka >= 0 && $nilaiAngka <= 59) {
    return 'C';
  } elseif ($nilaiAngka >= 60 && $nilaiAngka <= 69) {
    return 'BC';
  } elseif ($nilaiAngka >= 70 && $nilaiAngka <= 79) {
    return 'B';
  } elseif ($nilaiAngka >= 80 && $nilaiAngka <= 89) {
    return 'AB';
  } elseif ($nilaiAngka >= 90 && $nilaiAngka <= 100) {
    return 'A';
  } else {
    return 'Nilai tidak valid';
  }
}

// Example usage:
$nilaiAngka = 85;
$nilaiHuruf = konversiNilai($nilaiAngka);
echo "Nilai $nilaiAngka adalah $nilaiHuruf";
?>