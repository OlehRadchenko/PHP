<?php
session_start();
$_SESSION['imie'] = "Admin";
$_SESSION['ulubiony_kolor'] = "niebieski";
session_unset(); //Usuwa wszystkie zmienne sesyjne
session_destroy(); //Usuwa sesje
echo 'imie użytkownika: '.$_SESSION['imie'].', a jego ulubiony kolor to: '.$_SESSION['ulubiony_kolor']; //Tutaj wystąpi błąd wyświetlenia
?>