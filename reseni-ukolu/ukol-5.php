<?php

function minimum($a, $b) {
    if (!is_numeric($a) || !is_numeric($b)) {
        return false;
    }

    if ($a < $b) {
        return $a;
    }

    return $b;
}

//$minimum = minimum(56, 12.3);
$minimum = minimum(56, 'xy');

if ($minimum === false) {
    echo 'Chyba';
} else {
    echo $minimum;
}
