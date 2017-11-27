<?php
include ('../sys/func.php');

$nam=$_POST['nam'];
$cont=$_POST['cont'];
$user=$_POST['user'];

$time=date('d.m.Y H:i:s');

mail ('polozhev@mail.ru', 'Предложение или вопрос на сайте!', $user.' ('.$time.')
'.$nam.'
'.$cont);
header("location: ../");
?>