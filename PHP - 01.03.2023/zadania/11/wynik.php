<?php

echo 'Sposób 1:<br>';     
$wynik=$_POST['liczba'];
echo 'Wprowadzono: ',$wynik;

echo '<br><br>Sposób 2:<br>';     
echo 'Wprowadzono: ',$_POST['liczba'];

//powrót do index.php
echo '
<br><br><form action="index.php" method="post">
	<input type="submit" value="<< Wróć">
</form>
';

?>


