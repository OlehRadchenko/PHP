<?php
include("biblioteka.php");

if (!empty($_POST['radio']))
{
    echo 'Wybrano:<br>';
    echo $_POST['radio'];
    wroc('18.php'); 
}
else
{
    echo 'Niezaznaczono żadnej kontrolki radio';
    wroc('18.php');
}

?>

