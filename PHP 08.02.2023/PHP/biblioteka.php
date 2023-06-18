<?php

function wroc($plik)
{
	echo '
	<form action="';echo $plik; echo '" method="post">
		<input type="submit" value="Wróć" id="przycisk">
	</form>
	';
}

?>



