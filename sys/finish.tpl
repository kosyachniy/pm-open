</div></center>
		<div class="a2">
			<div class="a3">
			<a href="/"><img src="/sys/logo.png"></a>
			<a href="/"><div>Читать</div></a>
			<a href="/write" id="del"><div>Написать</div></a>
			<a href="/about/" id="del"><div>О нас</div></a>
			</div><div class="a4"><form action="/sys/search.php" method="post" class="a8" id="del"><input placeholder="Поиск" name="search"></form><div>
<?php
if ($_SESSION['auth']==2) print '<font id="del"><a href="/cabinet">'.$_SESSION['user'].'</a> &nbsp;</font><a href="/sys/out.php">Выйти</a>'; else print '<font id="del">Гость &nbsp;</font><a href="/login">Войти</a>';
?>
</div></div>
		</div>
</body></html>