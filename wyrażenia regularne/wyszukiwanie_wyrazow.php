<?php
$wzorzec = '/byc/';
$tekst = 'byc albo nie byc';
if (preg_match($wzorzec, $tekst))
echo 'znaleziono wzorzec';
else
echo 'nie znaleziono nic';


echo 'znaleziono:'.preg_match_all($wzorzec, $tekst);
?>
