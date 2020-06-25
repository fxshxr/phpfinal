<?php
session_start();
echo session_id();


	$host = 'std-mysql.ist.mospolytech.ru'; // адрес сервера 
	$database = 'std_923'; // имя базы данных
	$user = 'std_923'; // имя пользователя
	$password = '12345678'; // пароль
	$link = mysqli_connect($host, $user, $password, $database) 
	$query = "SELECT * FROM 'link'";
	echo "<p> $query</p>";
	mysqli_close($link);

	 ?>