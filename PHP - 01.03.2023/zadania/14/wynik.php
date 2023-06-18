<?php

$liczba=$_POST['liczba'];

if (empty($liczba)) 
{
    echo 'Niewprowadzono wartości';    
}
else
{
    echo 'Wprowadzono: '.$liczba.'<br>'; 
	echo 'Typ wprowadzonej wartości: '.gettype($liczba).'<br>';
    $liczba_spr = (int)$liczba;
    //string w wyniku parsowania zmieni wartość $liczba na 0 !!! 
    if ($liczba_spr==0) {
        echo 'Niewprowadzono liczby';
    } else {
        echo 'Wprowadzono: '.$liczba.'<br>'; 
    }
}

//powrót do index.php
echo '
<br><br><form action="index.php" method="post">
	<input type="submit" value="Wróć">
</form>
';

?>


