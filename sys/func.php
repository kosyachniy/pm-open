<?php
header('Content-type: text/html; charset=utf-8');
session_start();

function db($a='')
  {
  //$db=mysqli_connect('localhost','root','','pm'.$a);
  $db=mysqli_connect('mysql.hostinger.ru','u920044506_k','asdrqwerty09','u920044506_k');
  if (mysqli_connect_errno()) print 'Ошибка 1. '.mysqli_connect_errno();
  mysqli_query($db,'SET names "utf8"');
  return $db;
  }

function user($b)
  {
  $ip=$_SERVER['REMOTE_ADDR'];
  $cookie=$_COOKIE['user'];
  
  if ($_SESSION['auth']!=2 && $_SESSION['auth']!=1)
  {
  if ($cookie=='')
    {
    if ($_SESSION['auth']!=1 && $_SESSION['auth']!=2)
      { // Сообщение при первом входе в день
      $_SESSION['access']=11;
      $_SESSION['auth']=1;
      $_SESSION['user']=$ip;
      }
    }
   else
    {
    $u=mysqli_query($db,"SELECT * FROM `user` WHERE `user`='$cookie'");
    if ($u)
      {
      while ($a=mysqli_fetch_array($u))
        if ($_COOKIE['password']==$a['pas'])
          {
          $_SESSION['access']=$a['admin'];
          $_SESSION['user']=$cookie;
          $_SESSION['auth']=2;
          $_SESSION['fio']=$a['nam'].' '.$a['fam'];
          }
      }
    }
    }
  
  if ($_SESSION['access']>12)
    print 'Ошибка 2. Вы заблокированы.';
   else
    {
    if ($_SESSION['auth']==2)
      {
      if ($b==1)
        return $_SESSION['user'];
       elseif ($b==3)
        return $_SESSION['user'].' <a href="/sys/php/out.php">Выйти</a>';
       elseif ($b==4)
        return 'Вы сейчас в пользователе '.$_SESSION['user'];
       elseif ($b==5)
        return $_SESSION['access'];
       elseif ($b==6)
        return $_SESSION['fio'];
      }
     else
      {
      if ($b==1)
        return $ip;
       elseif ($b==2)
        return 'Гость';
       elseif ($b==3)
        return 'Гость <a href="/set/login/">Войти</a>';
       elseif ($b==4)
        return 'Вы не вошли';
       elseif ($b==5)
        return $_SESSION['access'];
      }
    }
  }


function act($c,$d=0)
  {
  $db=db();
  $user=user(1);
  $time=date('d.m.Y H:i:s');
  if ($d==1) $t='Просмотрел';
    elseif ($d==2) $t='Добавил';
    elseif ($d==3) $t='Загрузил';
    elseif ($d==4) $t='Прокомментировал';
    elseif ($d==5) $t='Изменил';
    elseif ($d==6) $t='Удалил';
    elseif ($d==7) $t='Нравится';
    elseif ($d==8) $t='Навёл';
    elseif ($d==9) $t='Логин';
    elseif ($d==10) $t='Запрос';
    elseif ($d==11) $t='Настройки';
    elseif ($d==12) $t='Ошибка';
    elseif ($d==13) $t='Сообщение';
    elseif ($d==14) $t='Обратная связь';
    elseif ($d==15) $t='Поиск';
    elseif ($d==16) $t='Другое:';
  $t.=' '.$c;
  mysqli_query($db,"INSERT INTO `act`(`user`, `cont`, `time`) VALUES ('$user', '$t', '$time');");
  }

function start($title, $href, $descript)
  {
  act($href, 1);
  include('main.tpl');
  }
?>