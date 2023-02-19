<?php
function palindrome($string){
    $plat = strrev($string);
    if ($plat == $string){
        echo "$string is palindrome";
    }
    else{
        echo "$string is not palindrome";
    }
}


?>