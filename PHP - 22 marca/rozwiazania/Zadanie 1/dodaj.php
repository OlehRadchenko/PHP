<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 1</title>
    <style>
        #lewy{
            width: 200px;
            height: 500px;
            float: left;
            text-align: center;
            border-top: 1px solid black;
            border-right: 1px solid black;
        }
        #prawy{
            float: left;
            width: 800px;
            height: 500px;
            border-top: 1px solid black;
        }
        #container{
            width: 1002px;
            height: 500px;
        }
    </style>
</head>
<body>
    <div id="container">
        <?php
        include('menu.php');
        ?>
        <div id="prawy">
            <?php
                mysqli_report(MYSQLI_REPORT_OFF);
                $db = @mysqli_connect('localhost', 'root', '');
                if($db){
                    $baza = 'baza_radchenko';
                    $tabela = 'tabela_radchenko';
                    if(mysqli_select_db($db, $baza)){
                        $zapytanie = "SELECT * FROM $tabela";
                        $wynik = mysqli_query($db, $zapytanie);
                        while($row = $wynik->fetch_assoc()){
                            echo $row['lp'].' - '.$row['login'].'<br>';
                        }
                        echo '<br><br>Wpisz login jaki chcesz dodać
                        <form method="POST">
                        <input type="text" name="login">
                        <input type="submit">
                        </form>';
                        if(!empty($_POST['login'])){
                            $dodaj_login = $_POST['login'];
                            $zapytanie = "INSERT INTO $tabela VALUES('','$dodaj_login')";
                            $wynik = mysqli_query($db, $zapytanie);
                            mysqli_close($db);
                            header('Location: dodaj.php');
                        }
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>