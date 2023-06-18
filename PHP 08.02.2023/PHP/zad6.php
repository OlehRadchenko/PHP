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

    $t = array(5,5,5);

    $tab[0][0] = $t[0];
    $tab[1][1] = $t[1];
    $tab[2][2] = $t[2];

    for($i = 0; $i < 3; $i++){
        for($j = 0; $j < 3; $j++){
            echo $tab[$i][$j].'&nbsp;&nbsp;&nbsp;';
        }
        echo '<br>';
    }

?>