<?php
if (!isset($_POST['Jméno'], $_POST['Vzkaz']))
{echo 'Neplatný prístup!';}
else {
    $jmeno = $_POST['Jméno'];
    $vzkaz = $_POST['Vzkaz'];
    $info = "<b>$jmeno</b><br>$vzkaz</hr>";
    $otvor = fopen('prispevky.txt', 'a');}
    if ($otvor === false) {
        echo 'Chyba!';
    } else {
        fwrite($otvor, $info);
        fclose($otvor);
        echo 'Uložené!';
    }

?>
<a href="navstevni-kniha.php">Vratit sa</a>.