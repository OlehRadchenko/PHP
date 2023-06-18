<?php

if (empty($_POST['liczba'])) 
{
    echo 'Niewprowadzono wartości';    
}
else
{
    echo 'Wprowadzono: '.$_POST['liczba'].'<br>'; 
	echo 'Typ wprowadzonej wartości: '.gettype($_POST['liczba']);
}

//powrót do index.php
echo '
<br><br><form action="index.php" method="post">
	<input type="submit" value="Wróć">
</form>
';

?>


