<?php
include('../sys/func.php');
start('О нас', 'about', 'о нас');
?>

<center><h1>Написать</h1></center>

<style>
input {font-size: 20px; border-radius: 15px;}
input[type="submit"] {background-color: #c0c0c0; border: 1px solid #c0c0c0; padding: 7px; cursor: pointer;}
input[type="submit"]:hover {background-color: #fff; border: 1px solid #00bfff;}
textarea:focus, input:focus {outline: none;}

.b1 > div {width: 49%; display: inline-block;}
.b1 div div {width: 100%; text-align: center; padding: 30px 0 20px 0; font-size: 25px;}
.b1 input {margin: 5px; padding: 7px; width: 50%; padding: 7px;}
.b1 input {border: 1px solid #c0c0c0;} /* background-color: #c0c0c0; */
.b1 input:hover, input:active, input:focus {border: 1px solid #00bfff; background-color: #fff;}
.b1 input:valid:not(input[type="submit"]) {border: 1px solid #00e600;}
.b1{}:focus::-webkit-input-placeholder {color: transparent}
:focus::-moz-placeholder          {color: transparent}
:focus:-moz-placeholder           {color: transparent}
:focus:-ms-input-placeholder      {color: transparent}

input[type="checkbox"] {width: 20px; padding: 20px 0 0 0;}
input[type="file"] {border: 0;}
</style>

<div class="b1">
<form action="form.php" method="post">
	<input type="text" name="nam" placeholder="Название" required>
	<input type="text" name="cat" placeholder="Категория" required>
	<textarea placeholder="Содержание статьи" name="cont" style="height: 30vh;"></textarea>
	<input type="text" name="user" placeholder="Имя автора" required>
	<input type="submit" value="Отправить">
</form>
</div>

<?php
include('../sys/finish.tpl');
?>