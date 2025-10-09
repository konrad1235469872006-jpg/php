<?php //wyszkuwanie kodu pocztwego
$wzorzec = '/\d{2}-/d{3}/';
$tekst = " poczta 34-240 sucha bezkidzka";
if (preg_match($wzorzec,$tekst, $matches))
    echo " znalezniono kod pocztowy".matches[0];
else
    echo"nie znaleziono kodu pocztowego";
?>