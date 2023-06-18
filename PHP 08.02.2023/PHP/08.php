<?php
	
//tablica wielowymiarowa 
$tab=array();

//wypełnienie tablicy jedynkami
for ($i=0;$i<3;$i++) //wiersze 
{
	for ($j=0;$j<2;$j++) //kolumny
	{
		$tab[$i][$j]=1;
	}
}
//wyświetlenie tablicy
for ($i=0;$i<3;$i++)
{
	for ($j=0;$j<2;$j++)
	{
		echo $tab[$i][$j].'&nbsp;&nbsp;&nbsp;';
	}
	echo '<br>';
}

?>


