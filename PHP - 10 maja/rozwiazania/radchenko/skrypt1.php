<?php
$db = @mysqli_connect('localhost','root','','filmoteka2');
$zapytanie = "SELECT * FROM filmy WHERE IDFilm BETWEEN 4 AND 6";
$wynik = mysqli_query($db, $zapytanie);
while($row = $wynik -> fetch_assoc()){
    echo '<li>'.$row['Tytul'].'</li>';
}

mysqli_close($db);
?>