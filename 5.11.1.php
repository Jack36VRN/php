<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>5.11.1. Математические операторы</title>
</head>
<body>
	<?php
	
		$X = 5;
		$Z = $X++; // $Z = 5, $X = 6
		echo "<b>Постфиксная форма (\$Z=\$X++;):</b><br> ";
		echo "\$Z = $Z <br>\$X = $X <br><br>";
		$X = 5;
		$Z = ++$X; // $Z = 6, $X = 6
		echo "<b>Префиксная форма (\$Z=++\$X;):</b><br> \$Z = $Z <br>\$X = $X";

	?>
</body>