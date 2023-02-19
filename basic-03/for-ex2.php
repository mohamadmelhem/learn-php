<?php
$side1 = 5;
$side2 = 7;
$diagonal = 8;

$parallelogram_type = '';

if ($side1 == $side2 && $diagonal ** 2 == $side1 ** 2 + $side2 ** 2) {
    $parallelogram_type = 'rectangle';
} elseif ($side1 == $side2 && $side1 == sqrt(($diagonal ** 2) / 2)) {
    $parallelogram_type = 'rhombus';
}

if ($parallelogram_type != '') {
    echo "The given parallelogram is a $parallelogram_type.";
} else {
    echo "The given parallelogram is neither a rectangle nor a rhombus.";
}
?>