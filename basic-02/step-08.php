<?php
function PowerOfTwo($num) {

    while ($num > 1) {
        if ($num % 2 != 0) {
            return false;
        }
        $num = $num / 2;
    }
    return true;
}
$num=4;

if (PowerOfTwo($num)) {
    echo $num . ' is a power of 2';
} else {
    echo $num . ' is not a power of 2';
}

?>
