<?php
if(empty($_POST['a']) || empty($_POST['b']) || empty($_POST['c'])){
    echo 'Nie wprowadziłeś wszystkich liczb !!!';
}else{
    $a = (int)$_POST['a'];
    $b = (int)$_POST['b'];
    $c = (int)$_POST['c'];
    $delta = ($b*$b)-(4*$a*$c);
    if($delta < 0){
        echo 'Nie ma miejsc zerowych ;c';
    }else if($delta == 0){
        $pierw_delty = sqrt($delta);
        $x = -($b)/(2*$a);
        echo 'Funkcja kwadratowa ma tylko 1 pierwiastek : ',$x;
    }else{
        $pierw_delty = sqrt($delta);
        $x1 = (-($b)-$pierw_delty)/(2*$a);
        $x2 = (-($b)+$pierw_delty)/(2*$a);
        echo 'Funkcja kwadratowa ma 2 pierwiastki : ',$x1,' i ',$x2; 
    }
}

echo '
<br><br>
<form action="index.php" method="post">
	<input type="submit" value="Wróć">
</form>
';
?>