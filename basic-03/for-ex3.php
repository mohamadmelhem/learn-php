<?php

// Define the number of rows in the pattern
$num_rows = 10;

// Construct the upper half of the pattern
for ($i = 1; $i <= $num_rows; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "\n";
}

// Construct the lower half of the pattern
for ($i = $num_rows - 1; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "\n";
}
?>