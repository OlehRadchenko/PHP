<?php
$db = @mysqli_connect('localhost', 'root', '');
$baza = $_POST['baza'];
$tabela = $_POST['tab'];
mysqli_select_db($db, $baza);

if(isset($_POST['log']) && $_POST['log']!=0 && $_POST['log']!=""){
    $login = $_POST['log'];
    $zapytanie = "SELECT * FROM $tabela WHERE nazwa='$login'";
    $wynik = mysqli_query($db, $zapytanie);
    if(mysqli_num_rows($wynik) != 0){
        echo 'istnieje już taki login ;c';
    }else{
        $zapytanie = "INSERT INTO $tabela VALUES('NULL', '$login')";
        $wynik2 = mysqli_query($db, $zapytanie);
        $zapytanie = "SELECT * FROM $tabela";
        $wynik3 = mysqli_query($db, $zapytanie);
        echo 'Po zmianie tabela wygląda następująco:<br>lp - nazwa<br>';
        while($row = $wynik3 -> fetch_assoc()){
            echo $row['lp'].' - '.$row['nazwa'].'<br>';
        }
    }
}else{
    echo 'Niewprowadzono wartości ;c';
}
?>