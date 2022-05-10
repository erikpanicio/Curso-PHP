<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>
		<?php
			$ano_nascimento = $_GET['ano_nascimento'];
			$idade = 2022 - $ano_nascimento;
			echo "Ano de nascimento: $ano_nascimento <br> Idade: $idade";
			$resultado = ($idade >= 18 && $idade <= 64)?"Voto obrigatório":"Voto não obrigatório";
			echo "<br> $resultado";
		?>
	</body>
</html>