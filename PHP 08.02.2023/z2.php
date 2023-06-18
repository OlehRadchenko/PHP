<?php
$tab = array(2,5,7,9,10,3,50,600,70,15);
$tab2 = array();
echo "Wszystkie elementy tablicy:<br>";
for($i=0; $i<count($tab); $i++){
    echo $tab[$i]." ";
}
echo "<br>Wszystkie elementy tablicy których indeks jest w przedziale <2;7>:<br>";
for($i=2; $i<=7; $i++){
    echo $tab[$i]." ";
    $tab2[$i-2] = $tab[$i];
}
echo "<br>Wartość minimalna w tablicy której indeks jest w przedziale <2;7> to ".min($tab2)."<br>";
echo "Wartość maksymalna w tablicy której indeks jest w przedziale <2;7> to ".max($tab2);
?>