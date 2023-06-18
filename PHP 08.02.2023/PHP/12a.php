<?php

include("biblioteka.php");

if (!empty($_POST['imie'])) 
{
    echo $_POST['imie'];    
}
else
{
    echo 'Niewprowadzono imienia';
}

//przycisk "Wróć"
wroc('12.php');

?>


