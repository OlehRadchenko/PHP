<?php
echo '
<form action="17a.php" method="post">';
    $opis_chbk=array(); //opis checkbox-ów
    $licznik=1;
    for ($i=0;$i<3;$i++)
    {
        $opis_chbk[$i]='opcja '.$licznik++;
    }
    $licznik=1;
    for ($i=0;$i<3;$i++)
    {
        echo '<input type="checkbox" name="check[]" value="'.$licznik++.'" />';
        echo $opis_chbk[$i].'<br>';
    }
    echo '
	<br>
	<input type="submit" value="Dalej" id="przycisk">
</form>
';

?>



