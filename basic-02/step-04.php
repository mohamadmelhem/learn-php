<?php
function isArmstrong($num) {
  // Convert the number to a string and split it into an array of digits
  $digits = str_split((string)$num);
  $sum = 0;
  
  // Calculate the sum of the cubes of the digits
  foreach ($digits as $digit) {
    $sum += pow($digit, count($digits));
  }
  
  // Check if the sum is equal to the original number
  if ($sum == $num) {
    return true;
  } else {
    return false;
  }
}

// Test the function with some examples
echo isArmstrong(153); // true

?>
