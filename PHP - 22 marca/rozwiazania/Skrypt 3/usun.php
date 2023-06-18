<?php
$login = $_POST['login'];
$baza_nazwa = "baza_radchenko";
$tabela = "tabela_radchenko";
$db = mysqli_connect('localhost', 'root', '');
mysqli_select_db($db, $baza_nazwa);
$zapytanie = "DELETE FROM $tabela WHERE login='$login';";
$wynik = mysqli_query($db, $zapytanie);
mysqli_close($db);
header('Location: index.php');   
?>