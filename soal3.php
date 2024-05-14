<?php
// Define the array of students
$students = array(
    array("No Urut" => 1, "Poin" => 75, "Siswa" => "Adi"),
    array("No Urut" => 2, "Poin" => 80, "Siswa" => "Joni"),
    array("No Urut" => 3, "Poin" => 65, "Siswa" => "Jihan"),
    array("No Urut" => 4, "Poin" => 70, "Siswa" => "Aya"),
    array("No Urut" => 5, "Poin" => 85, "Siswa" => "Ita"),
    array("No Urut" => 6, "Poin" => 90, "Siswa" => "Budi"),
    array("No Urut" => 7, "Poin" => 95, "Siswa" => "Tini"),
    array("No Urut" => 8, "Poin" => 65, "Siswa" => "Sari")
);

// a) Tampilkan poin siswa dengan nomor urut 5
echo "Poin siswa dengan nomor urut 5: ". $students[4]["Poin"]. "<br>";

// b) Tampilkan semua nama siswa yang memiliki poin 90
echo "Nama siswa yang memiliki poin 90: ";
foreach ($students as $student) {
    if ($student["Poin"] == 90) {
        echo $student["Siswa"]. " ";
    }
}
echo "<br>";

// c) Tampilkan semua nama siswa yang memiliki poin 100
echo "Nama siswa yang memiliki poin 100: ";
$found = false;
foreach ($students as $student) {
    if ($student["Poin"] == 100) {
        echo $student["Siswa"]. " ";
        $found = true;
    }
}
if (!$found) {
    echo "Tidak ada";
}
echo "<br>";
?>