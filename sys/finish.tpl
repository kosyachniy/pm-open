</div></center>
		<div class="a2">
			<div class="a3">
			<a href="/"><img src="/sys/logo.png"></a>
			<a href="/"><div>Читать</div></a>
			<a href="/write"><div>Написать</div></a>
			<a href="/about/"><div>О нас</div></a>
			</div><div class="a4"><form action="/sys/search.php" method="post" class="a8"><input placeholder="Поиск" name="search"></form><div>
<?php
if ($_SESSION['auth']==2) print '<a href="/cabinet">'.$_SESSION['user'].'</a> &nbsp;<a href="/sys/out.php">Выйти</a>'; else print 'Гость &nbsp;<a href="/login">Войти</a>';
?>
</div></div>
		</div>
</body></html>