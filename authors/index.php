<?php
include('../sys/func.php');
$db=db();

$item=$_GET['i'];
if (!($item>=0)) $item=0;

if ($item)
	$list=mysqli_query($db, "SELECT * FROM `authors` WHERE `id`='$item'");
	while($note=mysqli_fetch_array($list))
		start($note['nam'].' '.$note['fam'].' - Source', 'authors/?i='.$item, 'Авторы газеты {Source} СПбГУ');

print '<center><div class="c3">';
$list=mysqli_query($db,"SELECT * FROM `note` WHERE `user`='$item'");
while($note=mysqli_fetch_array($list))
	print '<a href="../?i='.$note['id'].'"><div style="background-image: url(../load/img/'.$note['id'].'.jpg);" class="c10"><div>'.$note['nam'].'</div></div>';

print '</div></center>';
include('../sys/finish.tpl');
?>