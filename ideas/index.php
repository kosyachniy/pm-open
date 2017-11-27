<?php
include('../sys/func.php');
start('О нас', 'about', 'о нас');
?>

<style>
h1 {text-align: center;}

input {font-size: 20px; border-radius: 15px;}
input[type="submit"] {background-color: #c0c0c0; border: 1px solid #c0c0c0; padding: 7px; cursor: pointer;}
input[type="submit"]:hover {background-color: #fff; border: 1px solid #00bfff;}
textarea:focus, input:focus {outline: none;}

.b1, form {width: 100%;}
.b1 input {margin: 5px; padding: 7px; width: calc(100% - 27px); padding: 7px;}
input, textarea {-webkit-appearance: none;}
.b1 input {border: 1px solid #c0c0c0;} /* background-color: #c0c0c0; */
.b1 input:hover, input:active, input:focus {border: 1px solid #00bfff; background-color: #fff;}
.b1 input:valid:not(input[type="submit"]) {border: 1px solid #00e600;}
.b1{}:focus::-webkit-input-placeholder {color: transparent}
:focus::-moz-placeholder          {color: transparent}
:focus:-moz-placeholder           {color: transparent}
:focus:-ms-input-placeholder      {color: transparent}

input[type="checkbox"] {width: 20px; padding: 20px 0 0 0;}
input[type="file"] {border: 0;}
input[type="submit"] {width: 80%; margin-top: 20px;}
</style>

<h1>Центр идей</h1>
<div class="b1">
<form action="form.php" method="post">
	<center>
		<input type="text" name="nam" placeholder="Предложение / вопрос" required>
		<textarea placeholder="Содержание" name="cont" style="height: 30vh; width: calc(100% - 27px);"></textarea>
		<input type="text" name="user" placeholder="Ваши контакты" required>
		<input type="submit" value="Отправить">
	</center>
</form>
</div>

<?php
include('../sys/finish.tpl');
?>