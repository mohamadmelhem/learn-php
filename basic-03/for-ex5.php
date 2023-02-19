<?php

$sentence = "hello at codi";

$words = explode(" ", $sentence);
$numWords = count($words);
$reversedSentence = "";
for ($i = $numWords - 1; $i >= 0; $i--) {
    $reversedSentence .= $words[$i] . " ";
}
echo $reversedSentence;
?>