<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>5.9. Удаление переменной</title>
</head>
<body>
	<?php

		$Str = "Строка";
		
		unset($Str);
		if (isset($Str)) echo "Существует";
		else echo "Нет";
		echo "<br><br>\n";

	?>
</body>