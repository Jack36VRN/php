<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>5.8. Проверка существования переменной</title>
</head>
<body>
	<?php

		if (isset($_GET['name'])) {
			echo "<span style='color:red'>Привет, " . $_GET['name'] . "!</span><br><br>\n";
		}
		else {
			echo "Введите Ваше имя<br>\n";
			echo "<form action='" . $_SERVER['SCRIPT_NAME'] . "'>\n";
			echo "<input type='text' name='name'>\n";
			echo "<input type='submit' value='OK'>\n";
			echo "</form>\n";
			echo "<br>\n";
		}

		if (isset($Str)) echo "Существует";
		else echo "Нет";
		echo "<br>\n";
		if (empty($Str)) echo "Пустая";
		else echo "Нет";
		echo "<br><br>\n";

		$Str = "Строка";
		if (isset($Str)) echo "Существует";
		else echo "Нет";
		echo "<br>\n";
		if (empty($Str)) echo "Пустая";
		else echo "Нет";
		echo "<br><br>\n";

	?>
</body>