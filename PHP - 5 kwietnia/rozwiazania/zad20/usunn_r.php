<?php
$db = @mysqli_connect('localhost', 'root', '');
$baza = $_POST['baza'];
$tabela = $_POST['tab'];
mysqli_select_db($db, $baza);

if(isset($_POST['radio']) && $_POST['radio']!=0 && $_POST['radio']!=""){
    $login = $_POST['radio'];
    $zapytanie = "DELETE FROM $tabela WHERE nazwa='$login'";
    $wynik = mysqli_query($db, $zapytanie);
    $zapytanie = "SELECT * FROM $tabela";
    $wynik = mysqli_query($db, $zapytanie);
    echo 'Po zmianie tabela wygląda następująco:<br>lp - nazwa<br>';
    while($row = $wynik -> fetch_assoc()){
        echo $row['lp'].' - '.$row['nazwa'].'<br>';
    }
}else{
    echo 'Nie wprowadzono wartości ;c';
}
?>