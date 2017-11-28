<?php
include('../sys/func.php');

$nam=$_POST['nam'];
$cat=$_POST['cat'];
$cont=$_POST['cont'];
$user=$_POST['user'];

$time=date('d.m.Y H:i:s');

$text = $user.' ('.$time.')
'.$cat.' / '.$nam.'
'.$cont;
act($text, 2);
mail('polozhev@mail.ru', 'Новая статья в предложке!', $text);
header("location: ../");
?>