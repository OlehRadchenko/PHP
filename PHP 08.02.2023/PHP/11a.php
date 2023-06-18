<?php

if (!empty($_GET['imie'])) 
{
    echo $_GET['imie'];    
}
else
{
    echo 'Niewprowadzono imienia';
}

//przycisk "Wróć"
echo '
<form action="11.php" method="post">
	<input type="submit" value="Wróć" id="przycisk">
</form>';

?>


