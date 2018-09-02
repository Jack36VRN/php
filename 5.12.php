<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>5.12. Преобразование типов данных</title>
</head>
<body>
	<?php

		$Str = "5"; //Строка
		$Number = 3; //Число
		$Str2 = $Number + $Str; // Переменная содержит число 8
		$Str3 = $Str + $Number; // Переменная содержит число 8
		echo "\$Str2 = " . $Str2 . "; \$Str3 = " . $Str3;

		echo "<br>\n";

		$Str = "Привет"; //Строка
		$Number = 3; //Число
		$Str2 = $Number + $Str; // Переменная содержит число 3
		$Str3 = $Str + $Number; // Переменная содержит число 3
		echo "<br>\$Str2 = " . $Str2 . "; \$Str3 = " . $Str3;

		echo "<br>\n";

		$Str = "5"; //Строка
		$Number = 15; //Число
		$Str2 = $Number - $Str; // Переменная содержит число 10
		$Str3 = $Number * $Str; // Переменная содержит число 15
		$Str4 = $Number / $Str; // Переменная содержит число 3
		echo "<br>\$Str2 = " . $Str2 . "; \$Str3 = " . $Str3 . "; \$Str4 = " . $Str4;

		echo "<br>\n";

		$Str = "Строка"; //Строка
		$Number = 15; //Число
		$Str2 = $Number - $Str; // Переменная содержит число 15
		$Str3 = $Str - $Number; // Переменная содержит число -15
		$Str4 = $Number * $Str; // Переменная содержит число 0
		$Str5 = $Str * $Number; // Переменная содержит число 0
		$Str6 = $Number / $Str; // Переменная содержит число 0
		$Str7 = $Str / $Number; // Переменная содержит число 0
		echo "<br>\$Str2 = " . $Str2 . "; \$Str3 = " . $Str3 . "; \$Str4 = " . $Str4 . "; \$Str4 = " . $Str5 . "; \$Str4 = " . $Str6 . "; \$Str4 = " . $Str7;

		echo "<br>\n";

		$Str = "5"; //Строка
		$Number = 15; //Число
		settype($Number, "string");
		settype($Str, "integer");
		echo "<br>\$Number: " . gettype($Number) . "; \$Str: " . gettype($Str);

		echo "<br>\n";

		$Str = "5"; //Строка
		$Number = 3; //Число
		$Str2 = $Number + (integer)$Str; // Переменная содержит число 8
		echo gettype($Str); // Выведет string

		echo "<br>\n";

		$Str = "5"; //Строка
		$Number = 3; //Число
		$Str2 = $Number + intval($Str); // Переменная содержит число 8
		echo gettype($Str); // Выведет string
		echo "<br>\n";
		$Str2 = $Number + doubleval($Str); // Переменная содержит число 8
		echo gettype($Str); // Выведет string
		echo "<br>\n";
		echo gettype(strval($Str)); // Выведет string

	?>
</body>