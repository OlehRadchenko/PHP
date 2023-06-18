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
    </style>
</head>
<body>
    <div id="box">
        <h1>Filmy</h1>
        <?php
            $db = mysqli_connect('localhost','root','','grupa1');
            $query = "SELECT * FROM filmy, rezyserzy, recenzje WHERE filmy.IDFilm=recenzje.IDFilm AND rezyserzy.IDRezysera=filmy.IDRezysera;";
            $result = mysqli_query($db, $query);
            echo '<table>
            <tr>
            <th>Tytuł filmu</th>
            <th>Nazwisko reżysera</th>
            <th>Ocena</th>
            </tr>
            ';
            while($row = $result -> fetch_assoc()){
                echo '
                <tr>
                <td>'.$row['Tytul'].'</td>
                <td>'.$row['Nazwisko'].'</td>
                <td>'.$row['Ocena'].'</td>
                </tr>
                ';
            }
            echo '</table>';
            mysqli_close($db);
        ?>
    </div>
</body>
</html>