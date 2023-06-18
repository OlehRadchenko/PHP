<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        table, th, td{
            text-align: center;
            border: 1px black solid;
        }
        table{
            margin: 0 auto;
        }
        #box{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        form{
            display: flex;
            align-items: center;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <div id="box">
        <?php
        if(!isset($_POST['rok']) || !isset($_POST['tytul']) || !isset($_POST['nazwisko'])){
        echo '
        <form action="skrypt2.php" method="POST">
            Podaj rok produkcji: <input type="number" name="rok"><br>
            Podaj tytuł filmu: <input type="text" name="tytul"><br>
            Podaj nazwisko reżysera: <input type="text" name="nazwisko"><br>
            <input id="przycisk" type="submit" value="Wyświetl">
        </form>
        ';
        }else{
            $rok = $_POST['rok'];
            $tytul = $_POST['tytul'];
            $nazwisko = $_POST['nazwisko'];
            $db = mysqli_connect('localhost','root','','grupa1');
            $query1 = "SELECT * FROM filmy, rezyserzy WHERE Rok_prod=$rok";
            $query2 = "SELECT * FROM filmy, rezyserzy WHERE Tytul='$tytul'";
            $query3 = "SELECT * FROM filmy, rezyserzy WHERE Nazwisko='$nazwisko'";
            $res1 = mysqli_query($db, $query1);
            $res2 = mysqli_query($db, $query2);
            $res3 = mysqli_query($db, $query3);
            if($rok=="" || $tytul=="" || $nazwisko==""){
                echo 'Nie wprowadziłeś wszystkich wartości ;c';
            }else{
                if(mysqli_num_rows($res1)>0){
                    $czy_rok_s = 'Dobry rok';
                    $czy_rok = true;
                }else{
                    $czy_rok_s = 'Zły rok';
                    $czy_rok = false;
                }

                if(mysqli_num_rows($res2)>0){
                    $czy_tyt_s = 'Dobry tytul';
                    $czy_tyt = true;
                }else{
                    $czy_tyt_s = 'Zły tytuł';
                    $czy_tyt = false;
                }

                if(mysqli_num_rows($res3)>0){
                    $czy_naz_s = 'Dobre nazwisko';
                    $czy_naz = true;
                }else{
                    $czy_naz_s = 'Złe nazwisko';
                    $czy_naz = false;
                }

                if($czy_naz && $czy_tyt && $czy_rok){
                    $zap = "SELECT * FROM filmy,rezyserzy WHERE filmy.IDRezysera=rezyserzy.IDRezysera AND Rok_prod=$rok AND Tytul='$tytul' AND Nazwisko='$nazwisko';";
                    $wynik = mysqli_query($db, $zap);
                    if(mysqli_num_rows($wynik)>0){
                        echo "<b>Film istnieje</b>";
                    }else{
                        echo "<b>Filmu brak, ale dane wprowadzone występują w innych filmach</b>";
                    }
                }else{
                    echo '<b>Wprowadziłeś: '.$czy_rok_s.', '.$czy_tyt_s.', '.$czy_naz_s.'.</b>';
                }
            }
            mysqli_close($db);
        }
        ?>
    </div>
</body>
</html>