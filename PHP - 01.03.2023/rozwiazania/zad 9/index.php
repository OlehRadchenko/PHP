<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 9 - Radchenko</title>
</head>
<body>
    <?php
    $tablica = array(array(1,0,1), array(2,0,1), array(3,0,1));
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