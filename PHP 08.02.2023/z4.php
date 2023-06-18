<?php
$tab = array(array(1,2,3),array(1,2,0),array(1,0,2));
for($x=0; $x<3; $x++){
    for($y=0; $y<3; $y++){
        echo $tab[$x][$y]." ";
    }
    echo "<br>";
}
$suma_w=0;
$suma_kol=0;
$suma_p=0;

for($i=0; $i<3; $i++){
    $suma_w+=$tab[0][$i];
    $suma_kol+=$tab[$i][0];
}
for($x=0; $x<3; $x++){
    for($y=0; $y<3; $y++){
        if($x==$y){
            $suma_p+=$tab[$x][$y];
        }
    }
}
echo "Suma wszystkich cyfr umieszczonych w wierszu 1: ".$suma_w."<br>";
echo "Suma wszystkich cyfr umieszczonych w kolumnie 1: ".$suma_kol."<br>";
echo "Suma wszystkich cyfr umieszczonych po przekątnej: ".$suma_p."<br>";
?>