<?php

//funkcja
function pokaz_wynik($a,$b)
{
    // = 	operator przypisania
    // == 	operator porównania
    // % operator dzielenia modulo
    echo 'Reszta z dzielenia <b>'.$a.'</b> przez <b>'.$b.'</b> = ';
    echo $a%$b.'<br>';

    // ++ operator inkrementacji
    // -- operator dekrementacji
    $a++;
}

//wywołanie funkcji
pokaz_wynik(10,2);

?>

