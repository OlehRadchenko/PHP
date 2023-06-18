<?php
    $tab = array();

    $tab[0][0] = 1;
    $tab[0][1] = 2;
    $tab[0][2] = 3;
    $tab[1][0] = 1;
    $tab[1][1] = 2;
    $tab[1][2] = 0;
    $tab[2][0] = 1;
    $tab[2][1] = 0;
    $tab[2][2] = 2;

    for($i = 0; $i < 3; $i++){
        for($j = 0; $j < 3; $j++){
            echo $tab[$i][$j].'&nbsp;&nbsp;&nbsp;';
        }
        echo '<br>';
    }

    $s1 = 0;
    $s2 = 0;
    $s3 = 0;
    
    for($i = 0; $i < 3; $i++){
        $s1 += $tab[0][$i];
    }
    for($i = 0; $i < 3; $i++){
        $s2 += $tab[$i][0];
    }
    $s3 = $tab[0][0] + $tab[1][1] + $tab[2][2];

    echo 'suma wierszu 1: '.$s1.'<br>';
    echo 'suma kolumny 1: '.$s2.'<br>';
    echo 'suma przekatnej: '.$s3.'<br>';
?>