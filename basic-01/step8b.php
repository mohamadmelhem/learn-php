<?php

$grocery = [
    'eggs' => ['balade', 'mazere3'],
    'milk' => ['Fresh', 'Taanayel'],
    'water-pack' => ['Tanoureen', 'Reem']
];

// Output the sentence
echo "Hey Sir, Please I need 1 pack of " . $grocery['eggs'][0] . " eggs and 3 " . $grocery['water-pack'][1] . " Water Pack.\n";
?>