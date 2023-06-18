<?php

echo '
<form action="" method="post">
    Podaj adres e-mail<br>
    <input type="text" name="mail" /><br>
    Podaj kod pocztowy<br>
    <input type="text" name="kod" /><br>    
	<input type="submit" value="Dalej" id="przycisk">
</form>
';

if (!empty($_POST['mail'])) 
{
    if (!empty($_POST['kod'])) 
    {
        $mail=$_POST['mail'];
        $kod=$_POST['kod'];
        //walidacja adresu e-mail
        if (preg_match('/^[a-zA-Z0-9._-]+@+[a-zA-Z0-9._-]+[.]+[a-z]+$/', $mail)) 
        {echo 'adres e-mail jest podany poprawnie';	} 
        else {echo 'adres e-mail <b>nie</b> jest podany poprawnie';}
        //walidacja kodu pocztowego
        if (preg_match('/^[0-9]{2}-[0-9]{3}$/', $kod)) 
        {echo '<br>kod pocztowy jest podany poprawnie';	} 
        else {echo '<br>kod pocztowy <b>nie</b> jest podany poprawnie';}
    }
}

?>


