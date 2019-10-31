<?php
function minimum($a , $b)
{
    if (!is_numeric($a))
    {echo 'chyba';}
    elseif ($a > $b)
    {return $b;}
    elseif ($b > $a)
    {return $a;}
}

echo minimum(56, 12.3);
