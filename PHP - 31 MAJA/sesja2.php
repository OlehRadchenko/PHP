<?php
session_start();
$_SESSION['imie'] = "Adam"; //Zmiana wartości zmiennej sesyjnej o nazwie imie z Admin na Adam
$_SESSION['ulubiony_kolor'] = "czerwony"; //Zmiana wartości zmiennej sesyjnej o nazwie ulubiony_kolor z niebieskiego na czerwony
echo 'imie użytkownika: '.$_SESSION['imie'].', a jego ulubiony kolor to: '.$_SESSION['ulubiony_kolor'];
?>