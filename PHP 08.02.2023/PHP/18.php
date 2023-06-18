<?php
echo '
<form action="18a.php" method="post">';
    $opis_chbk=array(); //opis radio
    $licznik=1;
    for ($i=0;$i<3;$i++)
    {
        $opis[$i]='opcja '.$licznik++;
    }
    $licznik=1;
    for ($i=0;$i<3;$i++)
    {
        echo '<input type="radio" name="radio" value="'.$licznik++.'" />';
        echo $opis[$i].'<br>';
    }
    echo '
	<br>
	<input type="submit" value="Dalej" id="przycisk">
</form>
';

?>



