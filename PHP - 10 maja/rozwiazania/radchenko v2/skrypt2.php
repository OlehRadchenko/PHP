<?php
$db = @mysqli_connect('localhost','root','','filmoteka2');
$zapytanie = "SELECT * FROM rezyserzy WHERE Nazwisko LIKE('%i%')";
$wynik = mysqli_query($db, $zapytanie);
while($row = $wynik -> fetch_assoc()){
    echo '<li>'.$row['Nazwisko'].'</li>';
}

mysqli_close($db);
?>