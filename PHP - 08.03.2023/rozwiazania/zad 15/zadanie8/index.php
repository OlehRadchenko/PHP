<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 8 - Radchenko</title>
</head>
<body>
    <?php
    $tablica = array(array(1,2,3), array(4,5,6), array(7,8,9));
    $tablica_t = array(array(), array(), array());
    echo 'Zwykła macierz: <br>';
    for($i=0; $i<3; $i++){
        for($j=0; $j<3; $j++){
            echo $tablica[$i][$j],' ';
            $tablica_t[$j][$i] = $tablica[$i][$j];
        }
        echo '<br>';
    }
    echo 'Macierz transponowana: <br>';
    for($i=0; $i<3; $i++){
        for($j=0; $j<3; $j++){
            echo $tablica_t[$i][$j],' ';
        }
        echo '<br>';
    }
    ?>
</body>
</html>