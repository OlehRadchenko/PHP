<?php
$tab = array(array(1,2,3),array(1,2,0),array(1,0,2));
$tab2 = array(5,5,5);
for($x=0; $x<3; $x++){
    $tab[1][$x] = $tab2[$x];
}
for($x=0; $x<3; $x++){
    for($y=0; $y<3; $y++){
        echo $tab[$x][$y]." ";
    }
    echo "<br>";
}
?>