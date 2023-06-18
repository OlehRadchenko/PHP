<?php
    $tab = array(10,11,20,1,2,6,3,9,12,5);
    //wypisywanie
    for($i = 0; $i<10; $i++){
        echo $tab[$i].'<br>';
    }
    //parzyste
    echo '<br><br>';
    for($i = 0; $i<10; $i++){
        if($tab[$i]%2 == 0)
            echo $tab[$i].'<br>';
    }
    //suma
    $suma = 0;
    echo '<br><br>';
    for($i = 0; $i<10; $i++){
        $suma += $tab[$i];
    }
    echo $suma;
?>