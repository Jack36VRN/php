<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>5.14.6. Перебор элементов массива</title>
</head>
<body>
	<?php

		/**/

		echo "Использование цикла <i>for</i>:<br><br>\n";

		$Mass[] = "Один";
		$Mass[] = "Два";
		$Mass[] = "Три";
		$Mass[] = "Четыре";
		$count = count($Mass);
		for ($i=0; $i < $count; $i++) { 
			echo $Mass[$i] . "<br>";
		}

		echo "<br>\n";
		unset($Mass);
		if (empty($Mass)) echo "Массив <i>\$Mass</i> очищен";
		echo "<br><br>\n";

		//Отключаем вывод предупреждающих сообщений
		error_reporting(E_ALL & ~E_NOTICE);
		$Mass[1] = "Один";
		$Mass[2] = "Два";
		$Mass[3] = "Три";
		echo count($Mass); //Выведет: 3
		echo "<br>";
		$count = count($Mass);
		for ($i=0; $i < $count; $i++) { 
			echo $Mass[$i] . "<br>";
		} // Выведет: <br><br>Один<br>Два<br>

		echo "<br>\n";
		unset($Mass);
		if (empty($Mass)) echo "Массив <i>\$Mass</i> очищен";
		echo "<br><br>\n";

		echo "Перебор ассоциативного массива:<br><br>\n";

		$Mass["Один"] = 1;
		$Mass["Два"] = 2;
		$Mass["Три"] = 3;
		$Mass["Четыре"] = 4;
		for (reset($Mass); ($key = key($Mass)); next($Mass)) {
			echo $key . " =&gt; " . $Mass[$key] . "<br>";
		}

		echo "<br><br>\n";

		echo "Перебор ассоциативного массива в обратном порядке:<br><br>\n";
		for (end($Mass); ($key = key($Mass)); prev($Mass)) {
			echo $key . " =&gt; " . current($Mass) . "<br>";
		}

		echo "<br>\n";
		unset($Mass);
		if (empty($Mass)) echo "Массив <i>\$Mass</i> очищен";
		echo "<br><br>\n";

		echo "Использование цикла <i>foreach</i>:<br><br>\n";

		$Mass[] = "Один";
		$Mass[] = "Два";
		$Mass[] = "Три";
		$Mass[] = "Четыре";
		foreach ($Mass as $key) {
			echo $key . "<br>";
		}

		echo "<br>\n";
		unset($Mass);
		if (empty($Mass)) echo "Массив <i>\$Mass</i> очищен";
		echo "<br><br>\n";

		echo "Перебор ассоциативного массива:<br><br>\n";

		$Mass["Один"] = 1;
		$Mass["Два"] = 2;
		$Mass["Три"] = 3;
		$Mass["Четыре"] = 4;
		foreach ($Mass as $key => $value) {
			echo $key . " =&gt; " . $value . "<br>";
		}

		echo "<br>\n";
		unset($Mass);
		if (empty($Mass)) echo "Массив <i>\$Mass</i> очищен";
		echo "<br><br>\n";

		echo "Использование цикла <i>while</i>:<br><br>\n";

		$Mass[] = "Один";
		$Mass[] = "Два";
		$Mass[] = "Три";
		$Mass[] = "Четыре";
		while (list(, $value) = each($Mass)) {
			echo $value . "<br>";
		}

		echo "<br>\n";
		unset($Mass);
		if (empty($Mass)) echo "Массив <i>\$Mass</i> очищен";
		echo "<br><br>\n";

		echo "Перебор ассоциативного массива:<br><br>\n";

		$Mass["Один"] = 1;
		$Mass["Два"] = 2;
		$Mass["Три"] = 3;
		$Mass["Четыре"] = 4;
		while (list($key, $value) = each($Mass)) {
			echo $key . " =&gt; " . $value . "<br>";
		}

		echo "<br>\n";
		unset($Mass);
		if (empty($Mass)) echo "Массив <i>\$Mass</i> очищен";
		echo "<br><br>\n";

		echo "Перебор элементов массива без использования циклов\n";

		function f_print($value, $key) {
			echo $key . " =&gt; " . $value . "<br>";			
		}
		$Mass["Один"] = 1;
		$Mass["Два"] = 2;
		$Mass["Три"] = 3;
		$Mass["Четыре"] = 4;
		array_walk($Mass, "f_print");
		//Выведет Один => 1<br>Два => 2<br>Три => 3<br>Четыре => 4<br>

		echo "<br><br>\n";
		echo "<span style='color:red'>Часть работает некорректно:</span>\n";
		echo "<br><br>\n";


		function f_change($value_1, $key_1, $var_1) {
			$value_1 += $var_1;
		}
		function f_print_1($value_1, $key_1) {
			echo $key_1 . " =&gt; " . $value_1 . "<br>";			
		}
		$Mass["Один"] = 1;
		$Mass["Два"] = 2;
		$Mass["Три"] = 3;
		$Mass["Четыре"] = 4;
		array_walk($Mass, "f_change", 10);
		array_walk($Mass, "f_print_1");
		//Выведет: Один => 11<br>Два => 12<br>Три => 13<br>Четыре => 14<br>
	?>
</body>