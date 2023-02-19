<?php
function sum($num) {
  $sum = 0;
  $n = strlen($num);

  for ($i = 0; $i < $n; $i++) {
    $digit = $num[$i];
    $sum += $digit;
  }

  return $sum;
}

?>
