<?php
$text = "mohamad ali omar mohamad ";
$search_word = "mohamad";

$words = explode(" ", $text);
$count = 0;
$i = 0;

while ($i < count($words)) {
    if (strtolower($words[$i]) == strtolower($search_word)) {
        $count++;
    }
    $i++;
}

echo "The word '$search_word' appears $count times in the text."; 
?>