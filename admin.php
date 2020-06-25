

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Админ-панель - аналитика вопросов - экзамен php</title>
</head>
<body>
	<h1>
		Админ-панель
	</h1>
	<?php 
		
		$ip = $_SERVER['REMOTE_ADDR'];
		echo($ip);
		echo "<br>";
		echo date("Y/m/d h:i:sa");
	 ?>

</body>
</html>