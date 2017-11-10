<!Doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?=$title?></title>
    <link rel ="shortcut icon" type="images/png" href="/sys/logo.png">
    <meta name="author" content="Poloz Alexey">
    <meta name="keywords" content="<?=$descript?>">
    <meta name="description" content="<?=$descript?>">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="stylesheet" type="text/css" href="/sys/main.css">
    <script src="/sys/main.js"></script>
  </head>
  <body>
	<script type='text/javascript'>
	if(window.innerWidth<=600)
	    location.href='/m/'<?=$href?>;
	</script>
		<center><div class="a1">
<!-- #$d=rand(1,mb_strstr(scandir($_SERVER['DOCUMENT_ROOT'].'/sys/bck/', 1)[0],'.',true)); !-->