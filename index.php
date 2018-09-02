<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Учебный PHP</title>
</head>
<body>
	<a href="5.5.php" target="_blank">5.5. Вывод результатов работы скрипта</a><br>
	<a href="5.7.php" target="_blank">5.7. Типы данных и инициализация переменных</a><br>
	<a href="5.8.php" target="_blank">5.8. Проверка существования переменной</a><br>
	<a href="5.9.php" target="_blank">5.9. Удаление переменной</a><br>
	<a href="5.10.php" target="_blank">5.10. Константы. Создание и использование констант</a><br>
	<?php

		/*5.11.1. Математические операторы*/
		$X = 5;
		$Z = $X++; // $Z = 5, $X = 6
		echo "<b>Постфиксная форма (\$Z=\$X++;):</b><br> ";
		echo "\$Z = $Z <br>\$X = $X <br><br>";
		$X = 5;
		$Z = ++$X; // $Z = 6, $X = 6
		echo "<b>Префиксная форма (\$Z=++\$X;):</b><br> \$Z = $Z <br>\$X = $X";

		/*5.11.4. Оператор конкатенации строк. Подстановка значений перменных. Запуск внешних программ*/
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
		echo convert_cyr_string($K, "d", "w");
		echo "</textarea>";

	?>

</body>
</html>
