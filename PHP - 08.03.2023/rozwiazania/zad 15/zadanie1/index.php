<?php
$tab = array(2,5,7,9,10,3,50,600,70,15);
$suma = 0;
echo "Wszystkie elementy tablicy:<br>";
for($i=0; $i<count($tab); $i++){
    echo $tab[$i]." ";
    $suma+=$tab[$i];
}
echo "<br>Wszystkie parzyste elementy tablicy:<br>";
for($i=0; $i<count($tab); $i++){
    if($tab[$i]%2 == 0){
        echo $tab[$i]." ";
    }
}
echo "<br>A suma wszystkich elementów tablicy to: ".$suma;
?>