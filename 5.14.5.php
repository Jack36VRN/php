<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>5.14.5. Слияние массивов</title>
</head>
<body>
	<?php

		/**/

		$Mass1["Один"] = 1;
		$Mass1["Два"] = 2;
		$Mass2["Три"] = 3;
		$Mass2["Четыре"] = 4;
		$Mass3 = $Mass1 + $Mass2;
		print_r($Mass3); //  Выводим массив

		echo "<br><br>\n";
		unset($Mass, $Mass2, $Mass3);
		if (empty($Mass) & empty($Mass2) & empty($Mass3)) echo "Массивы очищены";
		echo "<br><br>\n";

		$Mass1[] = "Один";
		$Mass1[] = "Два";
		$Mass2[] = "Три";
		$Mass2[] = "Четыре";
		$Mass3 = array_merge($Mass1, $Mass2);
		print_r($Mass3); //  Выводим массив

	?>
</body>