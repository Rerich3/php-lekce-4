<?php
if (!isset($_POST['Jméno'], $_POST['Vzkaz']))
{print 'Neplatný prístup!';}
else {
    $jmeno = $_POST['Jméno'];
    $vzkaz = $_POST['Vzkaz'];
    $info = "<b>$jmeno</b><br>$vzkaz</hr>";
    $otvor = fopen('prispevky.txt', 'a');}
    if ($otvor === false) {
        print 'Chyba!';
    } else {
        fwrite($otvor, $info);
        fclose($otvor);
        print 'Uložené!';
    }

?>
<a href="navstevni-kniha.php">Vratit sa</a>.