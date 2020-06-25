

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Админ-панель - аналитика вопросов - экзамен php</title>
	<link rel="stylesheet" href="styles.css">
	
</head>
<body>
	<h1>
		Админ-панель
	</h1>
	<div class="hidden">
		<?php include 'index.php'; ?>
	</div>
	<?php 
	
		
			echo "<p>$num1  $num2 $txt1 $txt2 $var1 $var2</p>";
		
		

		$ip = $_SERVER['REMOTE_ADDR'];
		echo($ip);
		echo "<br>";
		echo date("Y/m/d h:i:sa");
	 ?>

</body>
</html>