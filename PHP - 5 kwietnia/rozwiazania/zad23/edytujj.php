<?php
$tab = $_GET['tab'];
$baza = $_GET['baza'];
if(isset($_POST['radio'])){
    $wartosc = $_POST['radio'];
    if(substr($wartosc, -1)=="n"){
        $wartosc2 = 'n';
    }else{
        $wartosc2 = 'h';
    }
    $wartosc = substr($wartosc,0,strlen($wartosc)-1);
    echo'
    <form action="edytujjj.php?baza='.$baza.'&tab='.$tab.'&co='.$wartosc2.'&wartosc='.$wartosc.'" method="post">
    Na co mam zmienić to pole: <input type="text" name="nowa_wartosc"><br>
    <input type="submit" value="Zmień">
    </form>
    ';
}else{
    echo 'Nie wprowadzono wartości ;c';
}
?>