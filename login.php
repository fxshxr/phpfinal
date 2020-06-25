
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Админ-панель - аналитика вопросов - экзамен php</title>
</head>
<body>
	<h1>Вход для Администратора</h1>
	<form action="" method="post">
		<label for="">Введите пароль <input type="text" name="pass"></label>
		<input type="submit">
	</form>
	<?php 

	if ($_POST['pass'] == 12345) {
		echo '<script>location.replace("admin.php");</script>'; exit;
	}
	else{
		echo "<p>Неверный пароль</p>";
	}
	
?>
</body>
</html>