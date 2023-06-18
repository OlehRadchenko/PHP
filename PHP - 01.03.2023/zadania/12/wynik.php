<?php

echo 'Sposób 1:<br>';     
$wynik=$_GET['liczba'];
echo 'Wprowadzono: ',$wynik;

echo '<br><br>Sposób 2:<br>';     
echo 'Wprowadzono: ',$_GET['liczba'];

//powrót do index.php
echo '
<br><br><form action="index.php" method="post">
	<input type="submit" value="<< Wróć">
</form>
';

?>


