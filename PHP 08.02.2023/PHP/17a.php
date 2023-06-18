<?php
include("biblioteka.php");

if (!empty($_POST['check']))
{
    echo 'Wybrano:<br>';
    foreach ($_POST['check'] as $wartosc)
    {
        echo $wartosc.'<br>';
    }
    wroc('17.php'); 
}
else
{
    echo 'Niezaznaczono żadnej kontrolki checkbox';
    wroc('17.php');
}

?>

