<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        Podaj nazwę bazy danych: <input type="text" name="baza"><br>
        Podaj nazwę tabeli: <input type="text" name="tab"><br>
        <input type="submit" value="Dalej">
        <style>
            *{
                overflow: hidden;
            }
        </style>
    </form>
    <?php
    if(isset($_POST['baza'])){
        if(!empty($_POST['baza']) && $_POST['baza']!=0 && !empty($_POST['tab']) && $_POST['tab']!=0){
            $baza = $_POST['baza'];
            $tabela = $_POST['tab'];
            
            $db = @mysqli_connect('localhost', 'root', '');
            if($db){
                if(mysqli_select_db($db, $baza)){
                    if(mysqli_query($db, "DESCRIBE $tabela")){
                        $zapytanie = "SELECT * FROM $tabela";
                        $wynik = mysqli_query($db, $zapytanie);
                        echo 'Aktualnie tabela wygląda następująco:<br>lp - nazwa<br>';
                        while($row = $wynik -> fetch_assoc()){
                            echo $row['lp'].' - '.$row['nazwa'].'<br>';
                        }
                        echo '<br><form action="dodajj.php" method="POST">
                        Wprowadź login który chcesz dodać: <input type="text" name="log">
                        <input type="hidden" value="'.$baza.'" name="baza"/>
                        <input type="hidden" value="'.$tabela.'" name="tab"/>
                        <input type="submit" name="akcja" value="Dodaj">
                        </form>
                        ';
                    }else{
                        echo 'Nie istnieje taka tabela ;c';
                    }
                }else{
                    echo 'Nie istnieje taka baza danych ;c';
                }
            }
            mysqli_close($db);
        }else{
            echo 'Niewprowadzono wartości';
        }
    }
    ?>
</body>
</html>