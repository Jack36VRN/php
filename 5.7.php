<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>5.7. Типы данных и инициализация переменных</title>
</head>
<body>
	<?php
	
		$var = 7;
		echo gettype($var) . "<br>\n"; //Выведет: integer
		$str = "Строка";
		echo gettype($str) . "<br>\n"; //Выведет: string
		$bool = true;
		echo gettype($bool) . "<br>\n"; //Выведет: boolean
		echo "<br>\n";

	?>
</body>