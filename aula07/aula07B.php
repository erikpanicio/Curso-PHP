<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>
		<?php
		$a = 3;
		$b = "3";
		$resultado = ($a == $b)?"Sim":"Não";		//Comparação de valores (3=3)
		echo "As variáveis são iguais?: $resultado";
		$resultado = ($a === $b)?"Sim":"Não";		//Comparação de valores e tipos: (3=3) mas (Int != String)
		echo "<br> As variáveis são iguais?: $resultado";
		?>
	</body>
</html>