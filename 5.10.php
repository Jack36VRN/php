<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>5.10. Константы. Создание и использование констант</title>
</head>
<body>
	<?php

		error_reporting(E_ALL);
		define('author1', 'Евгений');
		echo author1, "<br>"; //"Евгений"
		echo AUTHOR1, "<br><br>";
		//Предупреждение о неопределенной константе AUTHOR1
		define('author2', 'Людмила', true);
		echo author2, "<br>"; //"Людмила"
		echo AUTHOR2, "<br><br>"; //"Людмила"
		define('author3', 'Павел', false);
		echo author3, "<br>"; //"Павел"
		echo AUTHOR3, "<br><br>"; //"Павел"
		//Предупреждение о неопределенной константе AUTHOR3
		define("author", "Евгений", true);
		if (defined("author")) echo "Объявлена";
		else echo "Не объявлена";
		echo "<br><br>\n";

	?>
</body>