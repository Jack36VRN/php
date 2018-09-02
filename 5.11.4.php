<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>5.11.4. Оператор конкатенации строк. Подстановка значений перменных. Запуск внешних программ</title>
</head>
<body>

	<p><b>Необходимо решить проблему с кодировкой: не работает преобразование кодировки</b></p>

	<?php

		$Y=<<<Metka1
		<p>Строка 1</p>
		<p>Строка 2</p>
		<p>Строка 3</p>
Metka1;

		echo $Y;
		$X = "Привет";
		echo $X[0]; //Выведет "П"
		echo "<br><br>\n";

		$K = `dir`;

		echo "<textarea cols='70' rows='30'>";
		echo convert_cyr_string($K, "d", "w"); // неработающая функция преобразования кодировки
		echo "</textarea>";

	?>
</body>