<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 10 - Radchenko</title>
</head>
<body>
    <?php
    $tablica = array(array(1,0,1), array(2,0,1), array(3,0,1));
    $tablica_t = array(array(1,2,3), array(0,0,0), array(1,1,1));
    $czy_sa = true;
    echo 'pierwsza macierz: <br>';
    for($i=0; $i<3; $i++){
        for($j=0; $j<3; $j++){
            echo $tablica[$i][$j],' ';
            if($tablica[$i][$j]==$tablica_t[$j][$i] && $czy_sa){
                $czy_sa = true;
            }else{
                $czy_sa = false;
            }
        }
        echo '<br>';
    }
    echo 'czy ta macierz jest macierzą transponowaną tej pierwszej? <br>';
    for($i=0; $i<3; $i++){
        for($j=0; $j<3; $j++){
            echo $tablica_t[$i][$j],' ';
        }
        echo '<br>';
    }

    if($czy_sa){
        echo 'Druga macierz jest macierzą transportowaną w stosunku do macierzy 1 !';
    }else{
        echo 'Druga macierz nie jest macierzą transportowaną w stosunku do macierzy 1 !';
    }
    ?>
</body>
</html>