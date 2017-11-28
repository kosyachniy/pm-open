<?php
include('func.php');

start('Поиск','sys/search.php','Поиск по сайту');
$db=db();
$search=mb_strtolower($_POST['search'], 'UTF-8');
print '<br>Результаты поиска "'.$search.'"<br>';

$l=0;
print '<div class="c5">';
$res=mysqli_query($db,"SELECT * FROM `note`");
while($d=mysqli_fetch_array($res))
  {
  if (stripos(' '.mb_strtolower($d['nam'], 'UTF-8'), $search) || stripos(' '.mb_strtolower($d['cont'], 'UTF-8'), $search) || stripos(' '.mb_strtolower($d['tags'], 'UTF-8'), $search) || $d['id']==$search)
    {
    $l=$l+1;
    print '<a href="../?i='.$d['id'].'"><div style="background-image: url(../load/img/'.$d['id'].'.jpg);"><div><table><tr><td>'.$d['nam'].'<br>'.$d['tags'].'</td><td class="c6">&nbsp;'.$d['rating'].'</td></tr></table></div></div></a>';
    }
  }
print'</div>';

include('finish.tpl');
act($search, 15);
?>