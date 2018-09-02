<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>5.14.2. Получение и изменение элемента массива. Определение количества элементов массива</title>
</head>
<body>
	<?php

		$Mass = array("Ноль", "Один", "Два", "Три");
		$var = $Mass[1]; // Переменной $var будет присвоено значение "Один"
		echo "\$var = " . $var;
		echo "<br>\n";
		$Mass1[] = "Ноль";
		$Mass1[] = "Один";
		$Mass1[] = "Два";
		$Mass1[] = "Три";
		list($var1, $var2, $var3, $var4) = $Mass1;
		echo "\$var2 = " . $var2; // Переменной $var2 будет присвоено значение "Один"
		echo "<br>\n";
		echo "\$Mass[0] = " . $Mass1[0]; // Переменной $Mass1[0] будет присвоено значение "Ноль"
		echo "<br>\n";
		$Mass1[] = "Четыре";
		$Mass1[0] = "Нуль";
		echo "\$Mass[0] = " . $Mass1[0]; // Переменной $Mass1[0] будет присвоено значение "Нуль"
		echo "<br>\n";
		echo count($Mass1); // Выведет 5
		echo "<br>\n";
		echo sizeof($Mass1); // Выведет 5
	?>
</body>