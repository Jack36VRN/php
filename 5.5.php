<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>5.5. Вывод результатов работы скрипта</title>
</head>
<body>
	<?php
	
		for ($i=1; $i<6; $i++) {
			echo "Строка ", $i, "<br>\n";
			flush(); //Выводим строку сразу в Web-браузер
			ob_flush();
			sleep(1); // "засыпаем" на 1 секунду
		}
		echo "<br>\n";

	?>
</body>