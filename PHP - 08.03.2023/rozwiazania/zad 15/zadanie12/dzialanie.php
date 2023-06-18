<?php
if(empty($_POST['a']) || empty($_POST['b']) || empty($_POST['c'])){
    echo 'Nie wprowadziłeś wszystkich liczb !!!';
}else{
    $a = (int)$_POST['a'];
    $b = (int)$_POST['b'];
    $c = (int)$_POST['c'];
    if($a<0 || $b<0 || $c<0){
        echo 'Wprowadziłeś nie poprawne wartości!';
    }else if($a+$c>$b && $a+$b>$c && $c+$b>$a){
        echo 'Ten trójkąt można zbudować';
    }else{
        echo 'Nie da się zbudować takiego trójkątu';
    }
}

echo '
<br><br>
<form action="index.php" method="post">
	<input type="submit" value="Wróć">
</form>
';
?>