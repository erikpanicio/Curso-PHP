<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>
		<?php
			$a = 3;
			$b = &$a; //o & cria uma conexão entre b e a, alterando um altera o outro
			$b +=5;
			echo "a = $a b = $b"
		?>
	</body>
</html>