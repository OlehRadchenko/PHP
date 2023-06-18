<?php
setcookie("user", "Admin", time() + 3600);
setcookie("user", "Admin", time() - 3600); //Usuwamy cookie(ciasteczko)
if(isset($_COOKIE["user"])){
    $wartosc = $_COOKIE["user"];
    echo 'Wartość ciasteczka user = '.$wartosc;
}else{
    echo 'Ciasteczko nie istnieje(zostało usunięte)';
}
?>