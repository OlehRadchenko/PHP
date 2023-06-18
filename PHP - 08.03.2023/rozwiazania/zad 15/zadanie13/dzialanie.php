<?php
function poteguj($n,$m){
    $wynik = 1;
    for($i=0; $i<$m; $i++){
        $wynik*=$n;
    }
    return $wynik;
}

$n = (int)$_POST['n'];
$m = (int)$_POST['m'];
if($_POST['n'] == 0 || $_POST['m'] == 0){
    echo 'Zły typ danych !!!';
}else{
    if($n<1 || $m<0){
        echo 'Wprowadziłeś złe dane ;c';
    }else{
        echo $n,'^',$m,' = ',poteguj($n,$m);
    }
}

echo '
<br><br>
<form action="index.php" method="post">
	<input type="submit" value="Wróć">
</form>
';
?>