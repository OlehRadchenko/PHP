<?php
$db = mysqli_connect('localhost','root','');
mysqli_select_db($db, 'baza_radchenko');
 $zapytanie = "select*from loginy";
 $wynik = mysqli_query($db,$zapytanie);
 $ile_rek= $wynik -> num_rows;
 if ($ile_rek==0)
 {
 echo 'istnieje';
 }
 else 
{ 
echo 'nie istnieje';
}
?>
