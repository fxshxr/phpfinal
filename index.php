<?php 
session_start()
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Экзамен PHP - Аналитика запросов</title>
</head>
<body>
	<h1>Ответьте на вопросы ниже</h1>
	<a href="login.php">вход для администратора</a>
	<br>
	<form action="post">
		<label for="">Введите число <input type="text" name="num1"></label>
		<br>
		<label for=""> Введите положительное число больше 0<input type="text" name="num2"></label>
		<br>
		<label for=""> Введите ответ (не более 30 символов)<input type="text" name="txt1"></label>
		<br>
		<label for=""> Введите ответ (не более 255 символов)<input type="text" name="txt2"></label>
		<br>
		<label for="">Выберете вариант ответа<input type="text" name="variant1"></label>
		<br>
		<label for="">Выберете несколько вариантов ответа<input type="text" name="variant2"></label>
		<br>
		<input type="submit">
	</form>
	<?php 
	$base = mysql_connect("std-mysql.ist.mospolytech.ru:3306","std_923","12345678","std_923");
	$query ="SELECT * FROM `phpfinal'";
	echo $query;

	 ?>

</body>
</html>