<?php
include("biblioteka.php");
$wybor=$_POST['list'];
if ($wybor=='0') 
{
	echo 'Niedokonano wyboru<br>';
    wroc('15.php');
}
else 
{
    echo 'Wybrano: '.$wybor.'<br>';
    wroc('15.php');	
}
?>


