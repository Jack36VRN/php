<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php

		function f_change($value, $key, $var) {
			$value = $value + $var;
		}
		function f_print($value, $key) {
			echo $key . " =&gt; " . $value . "<br>";			
		}
		$Mass["Один"] = 1;
		$Mass["Два"] = 2;
		$Mass["Три"] = 3;
		$Mass["Четыре"] = 4;
		array_walk($Mass, "f_change", 10);
		array_walk($Mass, "f_print"); 
	?>
</body>
</html>