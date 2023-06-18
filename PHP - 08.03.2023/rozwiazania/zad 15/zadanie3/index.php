<?php
$nr_pracownika = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$nazwisko = array('Kamiński', 'Kaźmierczak', 'Witkowski', 'Przybylski', 'Cieślak', 'Wojciechowska', 'Wróblewska', 'Piotrowska', 'Jasińska', 'Mazurek');
$rok_zatrudnienia = array(1999, 2000, 2005, 2022, 2020, 2019, 1975, 2007, 2023, 2018);
for($i=0; $i<10; $i++){
    if(2023-$rok_zatrudnienia[$i] > 10){
        echo "ID: ".$nr_pracownika[$i]."  Nazwisko: ".$nazwisko[$i]."<br>";
    }
}
?>