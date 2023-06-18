<?php
$login = $_POST['login'];
$baza_nazwa = "baza_radchenko";
$tabela = "tabela_radchenko";
$db = mysqli_connect('localhost', 'root', '');
mysqli_select_db($db, $baza_nazwa);
$zapytanie = "INSERT INTO $tabela VALUES('', '$login')";
$wynik = mysqli_query($db, $zapytanie);
mysqli_close($db);
header('Location: index.php');    
/*while($row = $wynik2->fetch_assoc()){
        echo $row['lp'].' - '.$row['login'].'<br>';
    }
    echo '<br><br>
    <form action="dodaj.php" method="POST">
    Podaj login który chcesz dodać: <input type="text" name="login"><br>
    <input type="submit" value="Dodaj">
    ';*/
?>