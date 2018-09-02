<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>5.14.3. Многомерные массивы</title>
</head>
<body>
	<?php

		$Mass = array();
		$Mass[0] = array(1, 2, 3, 4);
		$var = $Mass[0][2]; // Переменной $var будет присвоено значение 3
		echo "\$var = " . $var; 
		echo "<br><br>\n";

	?>
</body>