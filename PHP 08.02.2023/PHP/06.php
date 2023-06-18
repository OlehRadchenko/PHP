<?php

//Tablica jednowymiarowa - minimum,maksimum,średnia
$tab1 = array(1,5,40);

//wyświetlenie elementów tablicy
$ile_elem=count($tab1);
echo 'Elementy tablicy:<br> ';
for ($i=0;$i<$ile_elem;$i++) 
	{echo $tab1[$i].'<br>';}

//obliczenie średniej
$ile_elem=count($tab1);
$suma=0;
for ($i=0;$i<$ile_elem;$i++) 
	{$suma=$suma+$tab1[$i];}
$srednia=round($suma/$ile_elem);
	
//obliczenie minimum i maksimum
$minimum=min($tab1);	
$maksimum=max($tab1);
echo '<br><br>Minimum: '.$minimum;
echo '<br>Maksimum: '.$maksimum;
echo '<br>Średnia: '.$srednia;

?>

