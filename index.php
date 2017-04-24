<?php
include('sys/func.php');
$db=db();
$item=$_GET['i'];
$page=$_GET['p'];
if (!($item>=0)) $item=0;
if (!($page>=1)) $page=1;

if ($item)
	{
	$list=mysqli_query($db,"SELECT * FROM `note` WHERE `id`='$a'");
	while($note=mysqli_fetch_array($list))
		{
		start($note['nam'].' - PM-Open','?i='.$item,'');
		print '<center><h1>'.$d['nam'].'</h1></center><img src="load/img/'.$d['id'].'.jpg"><br><br>'.nl2br($d['dop']).'<hr>'.nl2br($d['cont']);
		}
	}
  else
	{
	start('Главная PM-Open','','');
	$start=($page-1)*10;
	$list=mysqli_query($db,"SELECT * FROM `note` ORDER BY `id` DESC LIMIT '$start',10");
	while($note=mysqli_fetch_array($list))
?>
<div class="c9"><div><center><div class="c1">
	<div>Выпуски
		<div>123</div>
	</div><div>Авторы
		<div>123</div>
	</div><div>Темы
		<div>123</div>
	</div><div>Года
		<div>123</div>
	</div><div>Праздники
		<div>123</div>
	</div>
</div>
<div class="c7">
	<div class="c8">
		<form action="/sys/search.php" method="post"><input placeholder="Поиск" name="search"></form>
	</div><div onclick="change(this);" class="c2">
		<div>Расширенный поиск</div>
	</div><div style="display: none;" class="c4">
</div></div>
</center></div></div>
<div class="c3">
<?php
//Этот блок будет заменён на 4 наиболее популярные статьи
$list=mysqli_query($db,"SELECT * FROM `note` WHERE `rating`>=50 ORDER BY `id` DESC LIMIT 4");
while($note=mysqli_fetch_array($list))
	print '<a href="?i='.$note['id'].'"><div style="background-image: url(load/img/'.$note['id'].'.jpg);"><div>'.$note['nam'].'</div></div>';
?>
</div>
<div class="c5">
<?php
$c=mysqli_query($db,"SELECT * FROM `note` WHERE `rating`<50 ORDER BY `id` DESC LIMIT 6");
while($d=mysqli_fetch_array($c))
	{
	print '<a href="?i='.$d['id'].'"><div style="background-image: url(load/img/'.$d['id'].'.jpg);"><div><table><tr><td>'.$d['nam'].'<br>'.$d['tags'].'</td><td class="c6">&nbsp;'.$d['rating'].'</td></tr></table></div></div></a>';
	}
print'</div>';
}
finish();
?>