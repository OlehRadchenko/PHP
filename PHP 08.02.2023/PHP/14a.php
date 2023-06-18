<?php
include("biblioteka.php");
$opis=$_POST['opis'];
if (empty($opis)) 
{
	echo 'Nie wprowadzono opisu';
    wroc('14.php');
}
else 
{
    echo $opis;
    wroc('14.php');	
}
?>


