	<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>
		<form method="GET" action="aula11B2.php">
			<?php
				$c = 1;
				while ($c <= 5){
					echo "Valor $c: <input type='number' name='valor$c' min='0' max='100' value='0'> <br><br>";
					$c++;
				}
			?>
			<input type="submit" value="Enviar">
		</form>
	</body>
</html>