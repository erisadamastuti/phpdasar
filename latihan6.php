<?php
// while loop
$x = 10;
while ($x >= 1) { // corrected the condition to $x >= 1
    echo "Nomor : $x <br>";
    $x--;
}

// do while
$x = 1;
do {
    $x++;
    echo "Nomor : $x <br>";
} while ($x <= 5);

// foreach
$colors = array("red", "green", "blue", "yellow"); // corrected the variable name from Scolors to $colors
foreach ($colors as $value) {
    echo "$value <br>"; // corrected the echo statement to display the value
}

// for
for ($x = 0; $x <= 10; $x++) {
    echo "Nomor : $x <br>";
}

// for with break
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        break;
    }
    echo "Nomor : $x <br>";
}
?>