<?php

echo '
<form action="" method="post">
    Podaj imię<br>
    <input type="text" name="imie" /><br>
	<input type="submit" value="Dalej" id="przycisk">
</form>
';

if (!empty($_POST['imie'])) 
{
    echo $_POST['imie'];    
}

?>


