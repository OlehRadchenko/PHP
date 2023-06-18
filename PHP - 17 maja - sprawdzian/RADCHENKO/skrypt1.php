<?php
$db = @mysqli_connect('localhost','root','','grupa1');
if($db){
    $zapytanie = "SELECT * FROM filmy;";
    $wynik = mysqli_query($db,$zapytanie);
    while($wiersz = $wynik->fetch_assoc()){
        echo '<li>'.$wiersz['Tytul'].'</li>';
    }
    mysqli_close($db);
}else{
    echo 'Nie udało się połączyć z bazą danych';
}
?>