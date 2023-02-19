<?php 
$num = 123456;
$sum = 0;

for ($i = 0; $i < strlen($num); $i++) {
    $digit = $num[$i];
    $sum += $digit;
}

echo "The sum of the digits in $num is $sum";

?>