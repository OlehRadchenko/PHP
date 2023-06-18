<?php

if (!empty($_POST['imie'])) 
{
    echo $_POST['imie'];    
}
else
{
    echo 'Niewprowadzono imienia';
}

//przycisk "Wróć"
echo '
<form action="10.php" method="post">
	<input type="submit" value="Wróć" id="przycisk">
</form>';

?>


