<?php

//zmienne
# komenatrz jednoliniowy
/* komentarz wieloliniowy 
ciąg dalszy komentarza
koniec komentarza */
$wiek=45;	
$nazwisko='Kowalski';
echo "Nazwisko: ".$nazwisko.', wiek: '.$wiek;
echo '<br><br>Nazwisko (typ): ',gettype($nazwisko);
echo '<br>Wiek (typ): ',gettype($wiek);

//stałe - wielkość znaków jest istotna
define("wiek",40);
define("IMIE",'Adam');
echo '<br><br>'.IMIE.' - lat: '.WIEK;

?>

