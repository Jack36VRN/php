<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>5.14.9. Сортировка массива. Создание пользовательской сортировки</title>
</head>
<body>
	<?php

		$Mass = array('Один', 'Два', 'Три', 'Четыре');
		sort($Mass); //Сортировка в алфавитном порядке
		print_r($Mass);
		
		echo "<br>\n";

		rsort($Mass); //Сортировка в обратном алфавитному порядке
		print_r($Mass);
		
		echo "<br><br>\n";
		unset($Mass);
		if (empty($Mass)) echo "Массив <i>\$Mass</i> очищен<br>";		
		echo "Сортировка ассоциативного массива:";
		echo "<br><br>\n";

		$Mass["Один"] = 1;
		$Mass["Два"] = 2;
		$Mass["Три"] = 3;
		$Mass["Четыре"] = 4;
		echo "Сортировка по значениям: <br>\n";
		asort($Mass); //Сортировка по значениям в алфавитном порядке
		print_r($Mass);		
		echo "<br>\n";
		arsort($Mass); //Сортировка по значениям в обратном порядке
		print_r($Mass);		

		echo "<br><br>\n";
		echo "Сортировка по ключам: <br>\n";

		ksort($Mass); //Сортировка по ключам в алфавитном порядке
		print_r($Mass);
		echo "<br>\n";
		krsort($Mass); //Сортировка по ключам в обратном порядке
		print_r($Mass);

		echo "<br><br>\n";
		echo "Стандартная сортировка: <br>\n";

		$Mass = array('единица1', 'Единый', 'Единица2');
		sort($Mass); //Сортировка в алфавитном порядке
		print_r($Mass);

		echo "<br><br>\n";
		echo "Сортировка без учета регистра: <br>\n";

		function f_sort($Str1, $Str2) { // Сортировка без учета регистра
			$Str1_1 = strtolower($Str1); // Преобразуем к нижнему регистру
			$Str2_1 = strtolower($Str2); // Преобразуем к нижнему регистру
			if ($Str1_1>$Str2_1) return 1;
			if ($Str1_1<$Str2_1) return -1;
			return 0;
		}
		setlocale(LC_TYPE, "ru_RU.CP1251"); // Настройка локали
		echo "<span style='color:red'>Не работает локаль</span><br>\n";
		$Mass = array('единица1', 'Единый', 'Единица2');
		usort($Mass, "f_sort");
		print_r($Mass);

	?>
</body>