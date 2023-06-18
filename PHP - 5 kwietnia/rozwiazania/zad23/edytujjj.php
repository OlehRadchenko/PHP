<?php
$db = @mysqli_connect('localhost', 'root', '');
$baza = $_GET['baza'];
$tabela = $_GET['tab'];
$wartosc = $_GET['wartosc'];
$co = $_GET['co'];
mysqli_select_db($db, $baza);

if(isset($_POST['nowa_wartosc']) && $_POST['nowa_wartosc']!=0 && $_POST['nowa_wartosc']!="" && !empty($_POST['nowa_wartosc'])){
    $nowe = $_POST['nowa_wartosc'];
    if($nowe == $wartosc){
        echo 'Nowa wartość jest identyczna do starej ;c';
    }else{
        if($co=='n'){
            $zapytanie = "SELECT * FROM $tabela WHERE nazwa='$wartosc'";
            $wynik = mysqli_query($db, $zapytanie);
            if(mysqli_num_rows($wynik) != 0){
                echo 'istnieje już taki login ;c';
            }else{
                $zapytanie = "UPDATE $tabela SET nazwa='$nowe' WHERE nazwa='$wartosc'";
                $wynik = mysqli_query($db, $zapytanie);
                echo 'Po zmianie tabela wygląda następująco:<br>lp - nazwa - haslo<br>';
                $wynik2 = mysqli_query($db, "SELECT * FROM $tabela");
                while($row = $wynik2 -> fetch_assoc()){
                    echo $row['lp'].' - '.$row['nazwa'].' - '.$row['haslo'].'<br>';
                }
            }
        }else{
            $zapytanie = "UPDATE $tabela SET haslo='$nowe' WHERE haslo='$wartosc'";
            $wynik = mysqli_query($db, $zapytanie);
            echo 'Po zmianie tabela wygląda następująco:<br>lp - nazwa - haslo<br>';
            $wynik2 = mysqli_query($db, "SELECT * FROM $tabela");
            while($row = $wynik2 -> fetch_assoc()){
                echo $row['lp'].' - '.$row['nazwa'].' - '.$row['haslo'].'<br>';
            }
        }
    }
}else{
    echo 'Nie wprowadzono wartości ;c';
}
?>