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
        $db = mysqli_connect('localhost','root','','grupa1');
        $query = "SELECT * FROM rezyserzy;";
        $result = mysqli_query($db, $query);
        echo '<table>
        <tr>
        <th>IDRezysera</th>
        <th>Nazwisko</th>
        <th>Imie</th>
        </tr>
        ';
        while($row = $result -> fetch_assoc()){
            echo '
            <tr>
            <td>'.$row['IDRezysera'].'</td>
            <td>'.$row['Nazwisko'].'</td>
            <td>'.$row['Imie'].'</td>
            </tr>
            ';
        }
        echo '</table>';
        mysqli_close($db);

        echo '
        <form action="skrypt3.php" method="POST">
            Podaj IDRezysera: <input type="number" name="id"><br>
            <input id="przycisk" type="submit" value="Zmień">
        </form>
        ';
        if(!isset($_POST['id']) || $_POST['id']==0 || $_POST['id']<1 || $_POST['id']>5){
            echo '<b>Reżysera brak</b>';
        }else{
            $id=$_POST['id'];
            echo '
            <form action="skrypt3.php" method="POST">
            <input type="hidden" name="id" value="'.$id.'">
            Podaj nowe imie: <input type="text" name="nowe_imie"><br>
            Podaj nowe nazwisko: <input type="text" name="nowe_nazwisko"><br>
            <input id="przycisk" type="submit" value="Zmień">
            </form>
            ';
            if(!isset($_POST['nowe_imie']) || !isset($_POST['nowe_nazwisko']) || $_POST['nowe_nazwisko']=="" || $_POST['nowe_imie'] == ""){
                echo '<b>Wprowadź wszystkie dane!</b>';
            }else{
                $id=$_POST['id'];
                $nowe_imie = $_POST['nowe_imie'];
                $nowe_nazwisko = $_POST['nowe_nazwisko'];
                $db = mysqli_connect('localhost','root','','grupa1');
                $query = "UPDATE rezyserzy SET Imie='$nowe_imie', Nazwisko='$nowe_nazwisko' WHERE IDRezysera=$id";
                $result = mysqli_query($db, $query);
                mysqli_close($db);
            }
        }
        ?>
    </div>
</body>
</html>