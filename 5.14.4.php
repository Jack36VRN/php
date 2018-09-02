<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>5.14.4. Ассоциативные массивы</title>
</head>
<body>
	<?php

		$Mass["Один"] = 1;
		$Mass["Два"] = 2;
		$Mass["Три"] = 3;
		echo $Mass["Один"]; // Выведет 1

		echo "<br>\n";
		unset($Mass);

		$Mass = array('Один' => 1, 'Два' => 2, 'Три' => 3, );
		echo $Mass["Один"]; // Выведет 1

		echo "<br><br>\n";
		unset($Mass);

		$Mass['Иванов'] = array('Имя' => 'Иван', 'Отчество' => 'Иванович', 'Год рождения' => 1966 );
		$Mass['Семенов'] = array('Имя' => 'Сергей', 'Отчество' => 'Николаевич', 'Год рождения' => 1980 );
		echo $Mass['Иванов']['Год рождения']; // Выведет: 1966

		echo "<br>\n";
		unset($Mass);

		$Mass  = array(
			'Иванов' => array('Имя' => 'Иван', 'Отчество' => 'Иванович', 'Год рождения' => 1966 ),
			'Семенов' => array('Имя' => 'Сергей', 'Отчество' => 'Николаевич', 'Год рождения' => 1980 )
		);
		echo $Mass['Семенов']['Отчество']; // Выведет: Николаевич

		echo "<br><br>\n";
		unset($Mass);

		$Mass["Один"] = 1;
		$Mass["Два"] = 2;
		$Mass["Три"] = 3;
		$Mass2 = array_keys($Mass);
		//Выводим ключи массива
		foreach ($Mass2 as $key) {
			echo $key . "<br>";
		} //Выведет: Один<br>Два<br>Три<br>
		$Mass3 = array_values($Mass);
		//Выводим значения массива
		foreach ($Mass3 as $key) {
			echo $key . "<br>";
		} //Выведет: 1<br>2<br>3<br>

	?>
</body>