<?php

function Prime($number) {
    // 1 is not a prime number
    if ($number == 1) {
        echo" is not a prime number.";
    }

    
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            echo" is not a prime number.";
        }
        else{
            echo" is a prime number.";
            }
    }

    
}
Prime(15);

?>