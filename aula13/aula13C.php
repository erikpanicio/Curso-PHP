	<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Tabuada(For)</title>
	</head>
	<body>
		<form method="GET" action="aula13B.php">
			<select name="numero">
				<?php
					for($i=1;$i<=10;$i++){
						echo "<option>$i</option>";
					}
				?>
			</select>
			<input type="submit" value="Enviar">
		</form>
	</body>
</html>