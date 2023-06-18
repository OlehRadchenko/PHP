<?php
    $tab = array(10,11,20,1,2,6,3,9,12,5);
    //wypisywanie
    for($i = 0; $i<10; $i++){
        echo $tab[$i].'<br>';
    }
    echo '<br><br>';
    $min=min($tab);
    for($i = 2; $i<8; $i++){
        echo $tab[$i].'<br>';
    }
    echo 'min:'.$min;


?>