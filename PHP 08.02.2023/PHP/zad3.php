<?php
    $nr_pracownika = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    $nazwisko = array('Aser', 'Baser', 'Claser', 'Kaser', 'Bas', 'Das', 'Ziemia', 'Pop', 'Erk', 'Lalowicz');
    $rok_zatrudnienia = array(1999, 2018, 2019, 1989, 2000, 2017, 2016, 2013, 2019, 2015);

    for($i = 0; $i<10; $i++)
        echo $nr_pracownika[$i].', ';
    echo '<br><br>';
    for($i = 0; $i<10; $i++)
        echo $nazwisko[$i].', '; 
    echo '<br><br>';
    for($i = 0; $i<10; $i++)
        echo $rok_zatrudnienia[$i].', ';
    echo '<br><br>';
    for($i = 0; $i<10; $i++){
        if((2023 - $rok_zatrudnienia[$i]) > 10){
            echo $nazwisko[$i].', ';
        }
    }
        
?>