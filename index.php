<?php
include('sys/func.php');
$db=db();
$item=$_GET['i'];
$page=$_GET['p'];
if (!($item>=0)) $item=0;
if (!($page>=1)) $page=1;

if ($item)
	{
	$list=mysqli_query($db,"SELECT * FROM `note` WHERE `id`='$item'");
	while($note=mysqli_fetch_array($list))
		{
		start($note['nam'].' - PM-Open','?i='.$item,'');
		print '<center><h1>'.$note['nam'].'</h1></center><img src="load/img/'.$note['id'].'.jpg"><br><br>'.nl2br($note['cont']);
		}
	}
  else
	{
	start('Главная PM-Open','','');
	$start=($page-1)*10;
	//$list=mysqli_query($db,"SELECT * FROM `note` ORDER BY `id` DESC LIMIT '$start',10");
	//while($note=mysqli_fetch_array($list))
?>
<div class="c3">
<div class="c9"><div><center><div class="c1">
	<div>Выпуски
<?php
	$list = mysqli_query($db, "SELECT * FROM `releases` ORDER BY `id` DESC");
	while ($note = mysqli_fetch_array($list))
		{
		if (strlen($note['nam']))
			print '<a href="releases/?i='.$note['id'].'"><div>'.$note['nam'].'</div></a>';
		else
			print '<a href="releases/?i='.$note['id'].'"><div>Выпуск №'.$note['id'].' ('.$note['time'].')</div></a>';
		}
?>
	</div><div>Авторы
<?php
	$list = mysqli_query($db, "SELECT * FROM `auth` ORDER BY `id` DESC");
	while ($note = mysqli_fetch_array($list))
		print '<a href="authors/?i='.$note['id'].'"><div>'.$note['nam'].' '.$note['fam'].'</div></a>';
?>
	</div><div>Темы
<?php
	$list = mysqli_query($db, "SELECT * FROM `theme` ORDER BY `id` DESC");
	while ($note = mysqli_fetch_array($list))
		print '<a href="themes/?i='.$note['id'].'"><div>'.$note['nam'].'</div></a>';
?>
	</div><div>Года
		<a><div>Раздел в разработке</div></a>
	</div><div>Праздники
		<a><div>Раздел в разработке</div></a>
	</div>
</div>
<!--
<div class="c7">
	<div class="c8">
		<form action="/sys/search.php" method="post"><input placeholder="Поиск" name="search"></form>
	</div><div onclick="change(this);" class="c2">
		<div>Расширенный поиск</div>
	</div><div style="display: none;" class="c4">
</div></div>
!-->
</center></div></div>
<?php
$list = mysqli_query($db, "SELECT * FROM `note` WHERE `rating` >= 50 ORDER BY `id` DESC LIMIT 4");
while ($note = mysqli_fetch_array($list))
	print '<a href="?i='.$note['id'].'"><div style="background-image: url(load/img/'.$note['id'].'.jpg);" class="c10"><div>'.$note['nam'].'</div></div>';
?>
</div>
<div class="c5">
<?php
$c=mysqli_query($db,"SELECT * FROM `note` WHERE `rating`<50 ORDER BY `id` DESC LIMIT 6");
while($d=mysqli_fetch_array($c))
	{
	print '<a href="?i='.$d['id'].'"><div style="background-image: url(load/img/'.$d['id'].'.jpg);"><div><table><tr><td width="90%">'.$d['nam'].'<br>'.$d['tags'].'</td><td width="10%" class="c6">&nbsp;'.$d['rating'].'</td></tr></table></div></div></a>';
	}
print'</div>';
	}
include('sys/finish.tpl');
?>