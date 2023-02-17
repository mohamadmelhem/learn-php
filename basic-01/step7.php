<?php
$birth_year = rand(1950, 2023);
$current_year = date('Y'); 
$age = $current_year - $birth_year;
echo $age ;

if ($age > 18) {
  echo "You can drive";
} else {
  echo "You're still a kid, go and play GTA";
}
?>