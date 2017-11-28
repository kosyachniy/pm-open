<?php
include('../sys/func.php');

$nam=$_POST['nam'];
$cont=$_POST['cont'];
$user=$_POST['user'];

$time=date('d.m.Y H:i:s');

$text = $user.' ('.$time.')
'.$nam.'
'.$cont;
act($text, 2);
mail('polozhev@mail.ru', 'Предложение или вопрос на сайте!', $text);
header("location: ../");
?>