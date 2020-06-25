
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
	<form method="post">
		<label for="">Введите число <input type="number" name="num1" required></label>
		<br>
		<label for=""> Введите положительное число больше 0
			<input type="number" min='0' name="num2" required></label>
		<br>
		<label for=""> Введите ответ (не более 30 символов)<input type="textarea" required size="30" name="txt1"></label>
		<br>
		<label for=""> Введите ответ (не более 255 символов)<input type="textarea" 
			required  rows="10" cols="45" name="txt2" size="255"></label>
		<br>
		<label for="">Выберете вариант ответа
			<select required name="var1">
			<option value="1">1
			</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
		</select></label>
		<br>
		<label for="">Выберете несколько вариантов ответа<select multiple required name="var2">
			<option value="1">
				1
			</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
		 </select></label>
		<br>
		<input type="submit">
	</form>
	<?php 

	if ($_POST) {
		echo '<script>location.replace("clear.php");</script>'; exit;
		}
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$txt1 = $_POST['txt1'];
		$txt2 = $_POST['txt2'];
		$var1 = $_POST['var1'];
		$var2 = $_POST['var2'];
				

	 ?>
	

</body>
</html>