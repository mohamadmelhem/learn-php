<?php 
$grocery = ["Eggs", "Milk", "Cheese", "Water Pack ", "Tissues", "Watermelon"];
// Output the first 3 items
$first_three_items = array_slice($grocery, 0, 3);
echo "First three items: " . implode(', ', $first_three_items) . "\n";

// Output the last item
$last_item = end($grocery);
echo "Last item: " . $last_item . "\n";

// Display the message
echo "Hello Sir, do you have " . $first_three_items[0] . ", " . $first_three_items[1] . ", and " . $first_three_items[2] . "?";

    echo " Also if you sell fruits can I find a $last_item ?";
?>