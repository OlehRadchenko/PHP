<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <style>
        table, td, th{
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>
<body>
<?php
if($_POST['ile'] != ""){
    if($_POST['ile']>0 && $_POST['ile']<=6){
        $db = @mysqli_connect('localhost','root','','filmoteka2');
        $ile = $_POST['ile'];
        $zapytanie = "SELECT * FROM filmy, rezyserzy WHERE filmy.IDRezysera=rezyserzy.IDRezysera LIMIT ".$ile;
        $wynik = mysqli_query($db, $zapytanie);
        echo '<table>
        <tr>
            <th>Tytuł filmu</th>
            <th>Nazwisko reżysera</th>
            <th>Gatunek</th>
        </tr>';
        while($row = $wynik -> fetch_assoc()){
            echo '<tr>
            <td>'.$row['Tytul'].'</td>
            <td>'.$row['Nazwisko'].'</td>
            <td>'.$row['Gatunek'].'</td>
            </tr>';
        }
        echo '</table>';
        mysqli_close($db);
    }else{
        echo 'Błąd';
    }
}else{
    echo 'Nie podałeś wartości!';
}
?>
</body>
</html>