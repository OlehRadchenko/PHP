<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skrypt nr 3</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<?php
    $serw = false;
    $baz = false;
    $tabela = false;
    $baza_nazwa = 'baza_radchenko';
    $tabela_nazwa = 'tabela_radchenko';
    mysqli_report(MYSQLI_REPORT_OFF);
    $db = @mysqli_connect('localhost', 'root', '');
    if($db){
        $serw = true;
        if(mysqli_select_db($db, $baza_nazwa)){
            $baz = true;
            if(mysqli_query($db, "DESCRIBE $tabela_nazwa;")){
                $tabela = true;
            }
        }
    }
    echo'
    <table style="border: 1px solid black">
        <tr>
            <td></td>
            <td>Tak</td>
            <td>Nie</td>
        </tr>
        <tr>
            <td>Połączone z serwerem</td>
            <td>';
            if($serw){
                echo '&nbsp;*';
            }
            echo '</td>
            <td>';
            if(!$serw){
                echo '&nbsp;*';
            }
            echo '</td>
        </tr>
        <tr>
            <td>Istnieje baza danych</td>
            <td>';
            if($baz){
                echo '&nbsp;*';
            }
            echo '</td>
            <td>';
            if(!$baz){
                echo '&nbsp;*';
            }
            echo '</td>
        </tr>
        <tr>
            <td>Istnieje Tabela</td>
            <td>';
            if($tabela){
                echo '&nbsp;*';
            }
            echo '</td>
            <td>';
            if(!$tabela){
                echo '&nbsp;*';
            }
            echo '</td>
        </tr>
    </table><br><br>';
    if($tabela){
        $zapytanie = "SELECT * FROM $tabela_nazwa;";
        $wynik = mysqli_query($db, $zapytanie);
        while($row = $wynik->fetch_assoc()){
            echo $row['lp'].' - '.$row['login'].'<br>';
        }
        echo '<br><br>
        <form action="usun.php" method="POST">
        Podaj login który chcesz usunąć: <input type="text" name="login"><br>
        <input type="submit" value="Usuń">
        ';
        mysqli_close($db);
    }
    ?>
</body>
</html>