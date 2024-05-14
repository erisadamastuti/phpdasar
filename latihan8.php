<?php
// data kelas dengan array 2 dimensi
$array = array(
    "1C" => array("udin", "ismail", "adi"),
    "10" => array("lukman", "fajri", "mahmud")
);
// menampilkan data array
print_r($array);

// menaMpilkan kelas 1C
print_r($array['1C']);

// menampilkan kelas 10 dengan index 0
echo $array['10'][0]; // Tampilkan "lukman"

// tampilkan fajri
echo $array['10'][1]; // Tampilkan "fajri"

// tampilkan andi
echo $array['1C'][2]; // Tampilkan "adi"

// data kelas bisa ditulis juga dengan
$array_simple = array(
    "1C" => ["udin", "ismail", "adi"],
    "10" => ["lukman", "fajri", "mahmud"]
);
print_r($array_simple);
?>