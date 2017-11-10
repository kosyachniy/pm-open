<?php
include ('../sys/func.php');

$nam=$_POST['nam'];
$cat=$_POST['cat'];
$cont=$_POST['cont'];
$user=$_POST['user'];

$time=date('d.m.Y H:i:s');

mail ('polozhev@mail.ru', 'Новая статья в предложке!', $user.' ('.$time.')
'.$cat.' / '.$nam.'
'.$cont);
header("location: ../");
?>