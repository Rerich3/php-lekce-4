<?php
function maximum($a, $b)
{
    if (is_numeric($a)) {
        if ($a > $b) {
            echo $a;
            echo '<br>';
        }
    } if (is_numeric($b)) {
        if ($b > $a) {
            echo $b;
            echo '<br>';
        }
    }
    else {echo 'chyba' ;}

}
maximum(304, 560);
maximum(7.2, 7.1);
maximum(23, 23);
maximum(253, 'x');