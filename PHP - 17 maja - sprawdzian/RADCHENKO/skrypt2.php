<?php
$db = @mysqli_connect('localhost','root','','grupa1');
if($db){
    $zapytanie = "SELECT * FROM rezyserzy WHERE nazwisko LIKE('%oo%') OR nazwisko LIKE('%pp%');";
    $wynik = mysqli_query($db,$zapytanie);
    while($wiersz = $wynik->fetch_assoc()){
        echo '<li>'.$wiersz['Nazwisko'].'</li>';
    }
    mysqli_close($db);
}else{
    echo 'Nie udało się połączyć z bazą danych';
}
?>